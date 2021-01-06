
$(document).ready(function(){

    var modelPriceHolder,
        modelSpecsHolder,
        modelPrice,
        modelSpecs;

    modelSpecsHolder = $('#modelSpecs');
    modelPriceHolder = $('#modelPrice');

    modelPrice = 0;
    modelSpecs = '';

    calculatePrice();
    compileSpecs();

    function calculatePrice(){

        var modelPriceEngine = $('input[name=engine]:checked','#autoForm').val();
        var modelPriceTransmission = $('input[name=transmission]:checked','#autoForm').val();
        var modelPricePackage = $('input[name=package]:checked','#autoForm').val();

        modelPriceEngine = parseInt(modelPriceEngine);
        modelPriceTransmission = parseInt(modelPriceTransmission);
        modelPricePackage = parseInt(modelPricePackage);

        modelPrice = modelPriceEngine + modelPriceTransmission + modelPricePackage;
        modelPriceHolder.text(modelPrice + ' грн');
    }

    function compileSpecs(){

        modelSpecs = $('input[name=engine]:checked +label','#autoForm').text();
        modelSpecs += ' , ' + $('input[name=transmission]:checked +label','#autoForm').text();
        modelSpecs += ' , ' +  $('input[name=package]:checked +label','#autoForm').text();

        modelSpecsHolder.text(modelSpecs);

    }

    $('#autoForm').on('change', function(){

        calculatePrice();
        compileSpecs();

    });


    $('#colorSelector .colorItem').on('click', function(){
        var colorPath;
        colorPath = $(this).attr('data-img-path');
        $('#imgHolder img').fadeOut(500, function(){
            $(this).attr('src', colorPath).fadeIn(500);
        });
    });

});