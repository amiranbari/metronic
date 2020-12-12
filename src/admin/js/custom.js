function sweetAlert(id, text, icon, target, confirmText = "بله اطمینان دارم", confirmColor = '#d31', cancelText = "خیر", cancelColor = 'rgb(48, 133, 214)', outside = false) {
    Swal.fire({
        title: "آیا اطمینان دارید؟",
        text: text,
        icon: icon,
        showCancelButton: true,
        confirmButtonText: confirmText,
        cancelButtonText: cancelText,
        reverseButtons: true,
        allowOutsideClick: outside,
        confirmButtonColor: confirmColor,
        cancelButtonColor: cancelColor,
    }).then(function (result) {
        if (result.value) {
            $('#' + target + id).submit();
        }
    });
}


$(document).ready(function () {
    $('.delete-admin').on('click', function () {
        let item_id = $(this).data('delete');
        let text = "مدیریت قابل بازگشت نیست";
        let icon = "warning";
        let target = "deleteAdmin";
        sweetAlert(item_id, text, icon, target);
    });
});
