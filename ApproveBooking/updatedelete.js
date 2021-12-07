function updateGood() {
document.goodsform.action = "ApproveController.php";
document.goodsform.submit();
}
function deleteGood() {
if(confirm("Confirm to reject?")) {
document.goodsform.action = "RejectController.php";
document.goodsform.submit();
}
}
function deleteBooking() {
    if(confirm("Confirm to delete?")) {
    document.goodsform.action = "DeleteController.php";
    document.goodsform.submit();
    }
    }
    