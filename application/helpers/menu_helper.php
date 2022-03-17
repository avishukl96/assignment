<?php
 
 function showMenu($data){
 	$html = '<ol class="dd-list" style="">';
	 foreach ($data as $key => $value) {
 		$html.='<li class="dd-item" data-id="2">';
 		
			

			 $html.= '
					<div class="dd-outer">
					<div class="dd-handle"><i class="fas fa-arrows-alt"></i></div>
					<div class="dd-structure-item"  data-placement="top" data-toggle="popover" data-html="true" data-content="">
						<div class="dd-structure-img">
							<figure>
								<img src="./assets/images/user.jpg" alt="">
							</figure>
						</div>
						<div class="dd-structure-content">
							<div class="dd-structure-name">'.$value['name'].'</div>
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
						<div class="dd-structure-code">#'.$value["code"].'</div>
							<div class="dd-structure-description">'.$value["description"].'</div>
						</div>
					</div>
				</div>
			 
			 ';
		if ($value['sub_menu']) {
 			$html.= showMenu($value['sub_menu']);
 		}
		$html.= '</li>';
 	}

	 $html.= '</ol>';

	 return $html;
 }
	 



 ?>