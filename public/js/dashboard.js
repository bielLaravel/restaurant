$(document).ready(function () {
    $(document).on('click', '#alertCrud', function () {
        $('alert').hide();
    })
    //PUT THE VALUES OF THE BOOK IN THE INPUTS OF UPDATE MODAL
    $(document).on('click', '#btnUpdateBook', function () {
        $('#modalName').val($(this).data('name'));
        $('#modalEmail').val($(this).data('email'));
        $('#modalDate').val($(this).data('date'));
        $('#modalHour').val($(this).data('hour'));
        $('#modalPhone').val($(this).data('phone'));
        $('#modalPersons').val($(this).data('persons'));
        
        let id = $(this).data('id');
        $('#idToSubmit').attr('action',`/backendXoriguer/public/updateBook/${id}`);    
    });
    
    //Change the color depend on the validate status
    $('.status').map(function () {
        if (this.id == 1) {
            $(this).addClass('bg-warning');
        } else if (this.id == 2) {
            $(this).addClass('bg-success');
        } else {
            $(this).addClass('bg-danger')
        }
    })

   
    


});