$(document).on('click', '.cl-edit', function () {
    let clinicUcode = $(this).data('clinic-ucode');
    $('#editForm').attr('action', '/administrator/clinic/' + clinicUcode);
    $.ajax({
        url: '/administrator/clinic/' + clinicUcode,
        type: 'GET',
        dataType: 'json',
        success: function (clinic) {
            $('#edit_cl_code').val(clinic.cl_code);
            $('#edit_cl_name').val(clinic.cl_name);
            $('#edit_cl_order').val(clinic.cl_order);
            if (clinic.cl_active === 1) {
                $('#edit_cl_active_on').prop('checked', true);
            } else {
                $('#edit_cl_active_off').prop('checked', true);
            }
        },
        error: function (error) {
            console.log('Error:', error);
        }
    });
});
