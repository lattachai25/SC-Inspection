$(document).ready(function() {
    $('.deleteForm').click(function(evt) {
        evt.preventDefault();
        var name = $(this).data("name");
        swal({
                title: `ต้องการลบข้อมูล ${name} ?`,
                text: "ถ้าลบแล้วไม่สามารถกู้คืนได้",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("ลบข้อมูลเรียบร้อยแล้ว!", { icon: "success", });
                } else {
                    swal("ยกเลิกการลบข้อมูล!", { icon: "error" });
                }
            });
    });
});