<script src="<?php echo base_url() ?>assets/jqueryPrintArea/jquery.PrintArea.js"></script>
<script>
    $(document).ready(function() {
        $("#printThis").click(function() {
            $(".pTable").printArea({
                mode: 'popup',
                popClose: true
            });
        });

    });
</script>

<div class="container mt-1 pTable">

    <table class="table table-bordered ">
        <thead>
            <tr>
                <th scope="col">Days</th>
                <?php foreach ($slots as $slot) : ?>
                    <th><?= $slot ?></th>
                <?php endforeach; ?>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($days as $dayKey => $day) : ?>
                <tr>
                    <th><?= $day ?></th>

                    <?php foreach ($slots as $slot) : ?>
                        <td>

                            <?php foreach ($details as $detail) : ?>

                                <?php if ($detail['slot'] == $slot && $detail['days'] == $dayKey) :  ?>
                                    <div class="d-flex flex-column">
                                        <span style="font-weight:600">
                                            <?= $detail['subject'] ?>
                                        </span>
                                        <span style="color:gray">
                                            <?= $detail['teacher_name'] ?>
                                        </span>
                                    </div>

                                <?php endif; ?>
                            <?php endforeach; ?>
                        </td>
                    <?php endforeach; ?>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>



</div>


<a href="javascript:void(0);" class=" btn  btn-primary" id="printThis" style="margin-left: 84%">Print</a>