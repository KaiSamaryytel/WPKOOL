<?php 
/**
*
* sorting different section
* @ package cuda
**/

global $cuda_opt;
$sort_section = $cuda_opt['cuda_seciton_sorter']['Enabled'];
if ($sort_section): foreach ($sort_section as $key=>$value) {
 
    switch($key) {

        case 'service': get_template_part( 'section/section', 'service' );
        break;
 
        case 'team': get_template_part( 'section/section', 'team' );
        break;
 
        case 'skill': get_template_part( 'section/section', 'skill' );
        break;
 
        case 'portfolio': get_template_part( 'section/section', 'portfolio' );    
        break;  

        case 'about': get_template_part( 'section/section', 'about' );    
        break; 

        case 'contact': get_template_part( 'section/section', 'contact' );    
        break;   
 
    }
 
}
 
endif;


 ?>