<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Poppins', sans-serif;
    }
</style>
<?php
 session_start ();
echo".";
if(isset($_SESSION['UserName'])){
?>
<script>
    Swal.fire({
  title: "Dear <?php echo(ucfirst($_SESSION['UserName']));;?>",
  html: "We are pleased to inform you that your application data has been successfully recorded and is now awaiting evaluation. Our admissions team is diligently reviewing the information you provided. In the meantime, a faculty member from our college will be reaching out to you shortly to discuss the next steps in the admissions process. We appreciate your interest in our institution and look forward to the possibility of welcoming you to our academic community.<br><br>Best regards,<br><br>Admissions Team",
  confirmButtonText: "OK",
}).then((result) => {
  if (result.isConfirmed) {
    window.location.href = "home.php";
  }
});
</script><?php
unset($_SESSION['UserName']);}
else{
  header("Location: home.php");
}
?>