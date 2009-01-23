<?php
class RCCWP_SWFUpload
{
	function Body($inputName, $fileType, $isCanvas = 0, $urlInputSize = false)
	{
		global $flutter_domain;
		include_once('RCCWP_Options.php');

		if (!$urlInputSize) $urlInputSize = 20;

		if ($isCanvas==0) {
			$iframeInputSize = $urlInputSize;
			$iframeWidth = 380;
			$iframeHeight = 40;
		}
		else{
			$isCanvas = 1;
			$iframeWidth = 150;
			$iframeHeight = 60;
			$iframeInputSize = 3;
			$inputSizeParam = "&inputSize=$iframeInputSize";
		}

		$iframePath = FLUTTER_URI."RCCWP_upload.php?input_name=".urlencode($inputName)."&type=$fileType&imageThumbID=img_thumb_$inputName&canvas=$isCanvas".$inputSizeParam ;
		$enableBrowser = RCCWP_Options::Get('enable-browserupload') ;
		if( $enableBrowser != 0  || $enableBrowser != ''){
		?>
			<div id='upload_iframe_<?php echo $inputName?>'>
			<iframe id='upload_internal_iframe_<?php echo $inputName?>' src='<?php echo $iframePath;?>' frameborder='' scrolling='no' style="border-width: 0px; height: <?php echo $iframeHeight ?>px; width: <?php echo $iframeWidth ?>px;vertical-align:top;"></iframe>
			</div>
		<?php
		}
		?>
		
			<table border="0" style="width:100%">

				<?php
				if(! $enableBrowser )
				{
				?>
					<tr  style="background:transparent" id="swfuploadRow_<?php echo $inputName ?>">
						<td style="border-bottom-width: 0px;padding: 0px"><label for="swfupload" ><?php _e('Upload', $flutter_domain); ?>:</label></td>
						<td style="border-bottom-width: 0px">
                            <span id="upload-<?php echo $inputName?>" class="upload_file" ></span>
                        </td>
					</tr>
				<?php
				}
				?>

				<tr style="background:transparent">
					<td style="border-bottom-width: 0px;padding: 0"><label for="upload_url" ><?php _e('Or URL', $flutter_domain); ?>:</label></td>
					<td style="border-bottom-width: 0px">
						<input id="upload_url_<?php echo $inputName ?>"
							name="upload_url_<?php echo $inputName ?>"
							type="text"
							size="<?php echo $urlInputSize ?>"
							/>
						<input type="button" onclick="uploadurl('<?php echo $inputName ?>','<?php echo $fileType ?>')" value="Upload" class="button" style="width:70px"/>
					</td>
				</tr>

			</table>
		
		<?php
	}
}
?>
