<?php
class DisplayLogIndexView extends IndexView{
    public function display($logEntries){
        parent::displayHeader("Food Diary");
        ?>
    <div>
        <?php
        foreach($foodEntries as $i => $foodEntry){
            $entryID;
            $entryContent;
            $entryName;
            $entryDate;
        }
        ?>
</div>
<?php
        parent::displayFooter();
    }
}