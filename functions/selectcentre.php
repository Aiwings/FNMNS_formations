<?php function select_centres()
{
	if( isset($_POST["id"]))
	{


		global $wpdb;

		$sql_select = "SELECT * FROM `{$wpdb->prefix}centre_formation` WHERE `id`= '".$_POST["id"]."';";

		$reponse_select = $wpdb->get_results($sql_select );



			if (sizeof($reponse_select) == 1)
				{
				foreach ($reponse_select as $row)
					{
						$element = array(
								"centre"=> $row->centre,
								"gerant"=> $row->gerant,
								"adresse"=> $row->adresse,
								"cp"=> $row->code_postal,
								"ville"=> $row->ville,
								"email"=> $row->e_mail,
								"site"=> $row->site,
								"tel"=> "0".$row->telephone,
								"image"=> $row->image,
								"autre"=> $row->autre,
						);
					}

				}

	}
	die(json_encode($element));
}
?>
