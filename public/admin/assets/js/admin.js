var link_url = '';

function loadTudienJs(str1, str2) {
    $('#'+str2+'').empty();
    var type = $('#'+str1+'').val();
    $.ajax({
        type: 'POST',
        url: link_url+'/dashboard/load-tudien',
        data: { type: type },
        success: function(data){
            data.forEach(element => {
                $('#'+str2+'').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
            });
        }
    });
}

$(document).ready(function(e){

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    if ($('#list-value').val() != '' && $('#list-value').val() != undefined) {
        var vspilit = $('#list-value').val().split('[#]');
        var i = 0, length = vspilit.length;
        $('#list').empty();
        for (i=0; i < length-1; i++) $('#list').append('<li>'+vspilit[i]+'</li>')
    }

    $('#add-value').on('click', function(e){
        var value = $('#value').val();
        if (value != '') {
            $('#delListGt').show();
            $('.display-none').show();
            $('#list-value').val($('#list-value').val() + value + '[#]')
            $('#list').append('<li>'+value+'</li>')
            $('#value').val('')
            $('#value').focus();
        }
    })

    $('#delListGt').on('click', function(e){
        $('#list').empty();
        $('#list-value').val('');
        $('#delListGt').hide();
        $('.display-none').hide();
    })

    // Kinh phi
    $('#nguon').change(function(e){
        $('#nguon2').empty();
        var type = $('#nguon').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#nguon2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    // Hop tac quoc te
    $('#tinhchat').change(function(e){
        $('#tinhchat2').empty();
        var type = $('#tinhchat').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#tinhchat2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    $('#phancap').change(function(e){
        $('#phancap2').empty();
        var type = $('#phancap').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#phancap2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    $('#danhnghia').change(function(e){
        $('#danhnghia2').empty();
        var type = $('#danhnghia').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#danhnghia2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    $('#tinhtrang').change(function(e){
        $('#tinhtrang2').empty();
        var type = $('#tinhtrang').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#tinhtrang2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    // Tổ chức
    $('#trangthaitochuc').change(function(e){
        $('#trangthaitochuc2').empty();
        var type = $('#trangthaitochuc').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#trangthaitochuc2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    // Mo hih sang kien
    $('#hinhthuc').change(function(e){
        $('#hinhthuc2').empty();
        var type = $('#hinhthuc').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#hinhthuc2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    // danh muc chi thi
    $('#nhomchithi').change(function(e){
        $('#nhomchithi2').empty();
        var type = $('#nhomchithi').val();
        $.ajax({
            type: 'POST',
            url: link_url+'/dashboard/load-tudien',
            data: { type: type },
            success: function(data){
               data.forEach(element => {
                   $('#nhomchithi2').append('<option value="'+element['id']+'">'+element['giatri']+'</option>')
               });
            }
         });
    })

    // datatable
    // let table = $('#table-data').DataTable({
    //     "language": {
    //         "url": "https://cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Vietnamese.json"
    //     },
    //     dom: 'Blfrtip',
    // });

    // $("#exampleModalLong").modal('show');

    // Danh muc loai
    $(function () {
        $("#phanloaihoc").change();
    });

    $('#phanloaihoc').change(function(e){
        var val = $(this).val();
        $('#btnSubmit').removeClass('d-none');
        $('div[id^="elm_"]').addClass('d-none');
        switch (val) {
            case '0':
                $('#elm_01, #elm_02, #elm_03, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '1':
                $('#elm_01, #elm_02, #elm_06, #elm_03, #elm_07, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '2':
                $('#elm_01, #elm_02, #elm_08, #elm_03, #elm_07, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '3':
                $('#elm_01, #elm_02, #elm_09, #elm_03, #elm_07, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '4':
                $('#elm_01, #elm_02, #elm_10, #elm_03, #elm_07, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '5':
                $('#elm_01, #elm_02, #elm_11, #elm_03, #elm_07, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '6':
                $('#elm_01, #elm_02, #elm_12, #elm_03, #elm_13, #elm_07, #elm_04, #elm_05').removeClass('d-none');
                break;
            case '7':
                $('#elm_01, #elm_02, #elm_14, #elm_03, #elm_07, #elm_15').removeClass('d-none');
                break;
            case '8':
                $('#elm_16, #elm_17, #elm_18, #elm_19').removeClass('d-none');
                break;
            default :
                $('#btnSubmit').addClass('d-none');
        }
        
    });
    
});