$(document).ready(function (){
    $('.list-customer').hover(function (){
        $(this).css('color','red');
    },function (){
        $('.list-customer').css('color','black');})

    let origin = location.origin;
    function getListUser()
    {
        $.ajax({
            url:origin+ '/customer',
            method: 'GET',
            success: function ()
            {
                console.log(1);
            }
        })

    }

    getListUser();

    function deleteCustomer(id)
    {
        $.ajax({
            url: origin+ '/customer/'+ id+ '/delete',
            method: 'GET',
            success:function (){
                $('#customer-'+id).remove();
            }
        })
    }

    $('.delete-customer').click(function (){
        if(confirm('Are you sure?'))
        {
            let id = $(this).attr('data-id');
            console.log(id);
            deleteCustomer(id);
        }
    })


})
