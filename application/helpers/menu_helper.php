<?php
 
 function showMenu($data){
 		$html = '';
 	foreach ($data as $key => $value) {
 		
 		$html .=  ' <ol class="dd-list dd-level-1">';
 		 $html .='<li class="dd-item" data-id="2">';

 		 	 $html .=' <div class="dd-outer">
		                <div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
		                    <div class="dd-structure-item" data-placement="top" data-toggle="popover" data-html="true" data-content=''>
		                        <div class="dd-structure-img">
		                            <figure>
		                                <img src="<?= base_url() ?>assets/images/user.jpg" alt="">
		                            </figure>
		                        </div>
		                        <div class="dd-structure-content">
		                            <div class="dd-structure-name">User name1</div>
		                            <div class="dropdown">
		                                <button style="max-height:40px" class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                                    <i class="fas fa-ellipsis-v"></i>
		                                </button>
		                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
		                                  <a class="dropdown-item" href="#"><i class="fas fa-plus"></i> Add</a>
		                                  <a class="dropdown-item" href="#"><i class="fas fa-pencil-alt"></i> Edit</a>
		                                  <a class="dropdown-item" href="#"><i class="far fa-trash-alt"></i> Delete</a>
		                                </div>
		                              </div>
		                            <div class="dd-structure-code">#1234</div>
		                            <div class="dd-structure-description">Lorem Ipsum is simply dummy text of the printing</div>
		                        </div>
		                    </div>
		                </div>';

 		 $html .='</li>';
 		 $html .='</ol>';
 		 $value['name'].'<br>';
 		if ($value['sub_menu']) {
 			showMenu($value['sub_menu']);
 		}
 	}
 }
	 



 ?> }
