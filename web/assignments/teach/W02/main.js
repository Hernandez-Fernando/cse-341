function alertOnClick() {
    alert('Clicked!');
}

function changeColorJS() {
    var customColor = document.getElementById('colorInput').value;
    var firstDiv = document.getElementById('firstDiv');

    firstDiv.style.backgroundColor = customColor;
}

$(document).ready(function(){
    $('#jQueryButton').click(function (event) {
        event.preventDefault();
        var $customColor = $('#colorInput').val();
        $('#firstDiv').css('background-color', $customColor);
    });
    
    $('#toggleButton').click(function (event) {
        event.preventDefault();
        $('#thirdDiv').fadeToggle('slow', function() {
            if($('#thirdDiv').css('display') == 'none') {
                $('#toggleButton').text('Show Now!');
            } else {
                $('#toggleButton').text('Hide Now!');
            }
        });

    });
    
  });