
<?php 
$conn = mysqli_connect('localhost', 'root', '', 'e_book_reader');
$sql = "SELECT * FROM books";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Downloads files
if (isset($_GET['file_id'])) {
    $id = $_GET['file_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM books WHERE ISBN_no=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'books_pdfs/' . $file['pdf_name'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('books_pdfs/' . $file['pdf_name']));
        readfile('books_pdfs/' . $file['pdf_name']);

        // Now update downloads countas
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE ISBN_no=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

 
?>



