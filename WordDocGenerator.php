<?php
    //source files
    $sourceDirectory = "resources/";
    $sourceFileName = $sourceDirectory."testwordDoc.docx";
    //destination files
    $destinationDirectory = "documents/";
    $destinationFileName = $destinationDirectory."testwordDoc.docx";

fclose($wordDocFile);
    // 
    //serve the file for downloading.
    //https://stackoverflow.com/questions/3697748/fastest-way-to-serve-a-file-using-php
    //copy the docx template to the right directory.
    copy("resources/Co-Parenting Plan Template.docx",$destinationFileName);
    //rename the directory to .zip so as to have access to the xml files.
    rename($destinationFileName,$destinationDirectory."Co-Parenting Plan.zip");
    //unzip the archive.

    // access the xml files.
        //write to the xml file.
    require_once($destinationDirectory."Co-Parenting Plan.zip"."/word/document.xml");
    // re rename the file .docx
    rename($destinationDirectory."Co-Parenting Plan.zip",$destinationFileName);
    ?>
<?php
require_once("views/header.php");
?>
<row class="text-center">
    <div id="page0" class="card p-4">
        <H1>Heres your generated ParentingPlan</H1>
        <p><a href="<?php echo $destinationFileName; ?>">click</a> to download <?php echo $destinationFileName; ?></p>
    </div>
</row>
<?php
require_once("views/footer.php");
?>
