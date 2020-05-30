<div id="mdatp-tab"></div>
<h2 data-i18n="mdatp.title"></h2>

<table>
    <tr>
        <th>Item 1</th>
        <td id="mdatp_item1"></td>
    </tr>
    <tr>
        <th>Item 2</th>
        <td id="mdatp_item2"></td>
    </tr>
    <tr>
        <th>Item 3</th>
        <td id="mdatp_item3"></td>
    </tr>
    <tr>
        <th>Item 4</th>
        <td id="mdatp_item4"></td>
    </tr>
    <tr>
        <th>Item 5</th>
        <td id="mdatp_item5"></td>
    </tr>
</table>

<script>
$(document).on('appReady', function(){
    $.getJSON(appUrl + '/module/mdatp/get_data/' + serialNumber, function(data){
        $('#mdatp_item1').text(data['item1'])
        $('#mdatp_item2').text(data['item2'])
        $('#mdatp_item3').text(data['item3'])
        $('#mdatp_item4').text(data['item4'])
        $('#mdatp_item5').text(data['item5'])
    });
});
</script>
