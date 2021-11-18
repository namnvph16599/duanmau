$().ready(function() {
    $("#form_hang_hoa").validate({
        onfocusout: false,
        onkeyup: false,
        onclick: false,
        rules: {
            "ma_hh": {
                required: true,
            },
            "ten_hh": {
                required: true,
            },
            "don_gia": {
                required: true,
            },
            "hinh": {
                required: true,
            },
            "giam_gia" : {
                required :true
            },
            "mo_ta" : {
                required: true,
            }
        },
        messages: {
            "ma_hh": {
                required: "Bắt buộc nhập mã hàng hóa",
            },
            "ten_hh": {
                required: "Bắt buộc nhập tên hàng hóa",
            },
            "don_gia": {
                required: "Bắt buộc nhập đơn giá",
            },
            "hinh" : {
                required: "Bạn phải tải hình lên"
            },
            "giam_gia": {
                required: "Bắt buộc nhập giảm giá"
            },
            "mo_ta" : {
                required: "Bắt buộc nhập mô tả"
            }
        }
    });
});