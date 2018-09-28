<?php echo CHtml::beginForm('', 'post', array('class' => 'form-horizontal'));?>
<div class="modal-header">
    <a class="close" data-dismiss="modal" >&times;</a>
    <h3><?= t('PageHeader', 'Delete Picture') ?></h3>
</div>
<div class="modal-body">
    <p><?= t('AlertMessage', 'Are you sure you want to delete this picture?') ?></p>
</div>
<div class="modal-footer">
    <a href="#" class="btn btn-large btn-danger deleteFromConfirm" data-id=<?= $id ?>>
        <i class="icon-remove icon-white"></i> <?= t('Button', 'Delete') ?>
    </a>

</div>
<?= CHtml::endForm() ?>

<script type="text/javascript">
    $('a.deleteFromConfirm').off('click').on('click', function() {
        var form = $(this).closest('form');
        $.ajax({
            url: form.attr('action'),
            data: {id: $(this).attr('data-id')},
            type: 'POST',
            success: function(data) {
                $('#my-photo-modal').modal('hide');
                $.fn.yiiListView.update('my-photo-list');
            }
        });

        return false;
    });
</script>
