<body style="width:100%; margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#ffffff;">
    <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; background-color:#F0F0F0;color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:19px; margin-top:0; padding:0; font-weight:normal;">
        <tr>
            <td>
                <div id="tablewrap" style="width:100% !important; max-width:600px !important; text-align:center; margin:0 auto;">
                    <table id="contenttable" width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF; margin:0 auto; text-align:center; border:none; width: 100% !important; max-width:600px !important;border-top:8px solid #5191BD">
                        <tr>
                            <td width="100%">
                                <?php echo NEW_EMAIL_HEADER; ?>
                                <table bgcolor="#FFF" border="0" cellspacing="0" cellpadding="20" width="100%">
                                    <tr>
																				<td style="background:#FFF;width:100%;text-align:left;">
																					<p>
																							Hi <?php echo $emailDetails['name'];?>,                    
																					</p>
														
																					<p>
																					Te recordamos sobre la tarea - 
																					<b>
																						<?php echo $emailDetails['task'];?>
																						</b>
																					</p>														
																					<p>
																					<?php echo $emailDetails['remind_nm']; ?>'s message for you - <br /><br />
																					<?php echo $emailDetails['comment'];?></p>
																					<br/>
																					
																					<p>Saludos!<br/>
																					Dirección de Planificación, Procesos e Innovación</p>
																				</td>
																		</tr>																		
                                </table>
                                <table bgcolor="#F0F0F0" border="0" cellspacing="0" cellpadding="10" width="100%" style="border-top:2px solid #F0F0F0;margin-top:10px;border-bottom:3px solid #2489B3">
                                    <tr>
                                        <td width="100%" bgcolor="#ffffff" style="text-align:center;">
                                            <p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; padding:0; font-weight:normal;padding-top:5px;">
                                                <?php echo NEW_EMAIL_FOOTER; ?>
																						</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table> 
</body>