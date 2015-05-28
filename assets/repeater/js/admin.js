var agp_repeater = {};

(function($) {  
    $(document).ready(function() { 
        $(document).on('click', '.agp-del-row', function(e) {
           $(this).closest('.agp-row').remove();
        });

        $(document).on('click', '.agp-up-row', function(e) {            
            var el = $(this).closest('.agp-row');
            var prev = $(el).prev('.agp-row');
            $(el).insertBefore(prev);
        });            

        $(document).on('click', '.agp-down-row', function(e) {                        
            var el = $(this).closest('.agp-row');
            var next = $(el).next('.agp-row');
            $(el).insertAfter(next);
        });                    
        
        $(document).on('click', '.agp-add-row', function(e) {        
            var id = 'rp_' + $(this).closest('.agp-repeater').data('id');
            var content = $(this).closest('.agp-repeater').find('.agp-row.agp-row-template').html();

            agp_repeater[id].index = agp_repeater[id].index + 1;

            content = '<tr class="agp-row">' + content.replace(/\[0\]/g, '[' + agp_repeater[id].index + ']').replace(/_0_/g, '_' + agp_repeater[id].index + '_') + '</tr>';

            $(this).closest('.agp-repeater').find('tbody').append(content);
        });
        
    });
})(jQuery);
