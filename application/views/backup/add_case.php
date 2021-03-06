<?= include_view('header'); ?>
<?= include_view('heading'); ?>

<div class="content-box-label">
    <div class="content-box-label-wrapper">
        Add new case study
    </div>
</div>

<div class="content-box content-box-outline">
    <form action="/casemanager/add_case" method="POST">
        <div class="content-box-wrapper">
            <input type="text" name="title" style="display: box; box-sizing: border-box; width: 100%; border: solid 1px #e0e1e2; margin-bottom: 10px; font-size: 16px;" placeholder="Choose title" />
            <textarea name="description" style="display: box; box-sizing: border-box; border: solid 1px #e0e1e2; width: 100%; resize: none; height: 150px; font-size: 14px; font-family: Arial;" placeholder="Enter case description"></textarea>
        </div>
        <div class="content-box-footer">
            <input type="submit" class="button-grey" value="Save case study" style="float: right;" />
            <div style="clear: both;"></div>
        </div>
    </form>
</div>

<?= include_view('footer'); ?>