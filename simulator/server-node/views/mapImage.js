$(document).ready(function () {
    var $usamap, ratio = function () {
        // set html settings values
        var opts = $usamap.mapster('get_options', null, true);
        if (!ratio) {
            ratio = $usamap.width() / $usamap.height();
        }
        $('#stroke_highlight').prop("checked", opts.render_highlight.stroke);
        $('#strokewidth_highlight').val(opts.render_highlight.strokeWidth);
        $('#fill_highlight').val(opts.render_highlight.fillOpacity);
        $('#strokeopacity_highlight').val(opts.render_highlight.strokeOpacity);
        $('#stroke_select').prop("checked", opts.render_select.stroke);
        $('#strokewidth_select').val(opts.render_select.strokeWidth);
        $('#fill_select').val(opts.render_select.fillOpacity);
        $('#strokeopacity_select').val(opts.render_select.strokeOpacity);
        $('#mouseout-delay').val(opts.mouseoutDelay);
        $('#img_width').val($usamap.width());
    },
    default_options = {
        fillOpacity: 0.5,
        render_highlight: { //HOVER
            fillColor: '2aff00',
            stroke: true
        },
        render_select: { //WHEN SELECTED
            fillColor: 'ff000c',
            stroke: false
        },
        mouseoutDelay: 0,
        fadeInterval: 50,
        isSelectable: true,
        singleSelect: false//,
    };
    $usamap = $('#car');//NOME
    $usamap.mapster(default_options);
});