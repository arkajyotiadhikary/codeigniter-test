<?= $this->extend("layouts/base")?>

<?= $this->section("content")?>

                <div class="background"></div>
                <div class="main-menu">
                   <?= $this->include("partials/main_menu");?>
                </div>
                <div class="title">
                    <?= $this->include("partials/title");?>
                </div>
            </div>
            <div class="sort">
                    <?= $this->include("partials/sort");?>

            </div>
            <div class="body">
                    <?= $this->include("partials/body");?>

            </div>
            <?= $this->endSection()?>

           