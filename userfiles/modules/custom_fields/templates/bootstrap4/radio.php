<div class="col-<?php echo $settings['field_size']; ?>">
    <div class="form-group">

        <?php if($settings['show_label']): ?>
        <label class="col-form-label">
            <?php echo $data['name']; ?>
            <?php if ($settings['required']): ?>
                <span style="color: red;">*</span>
            <?php endif; ?>
        </label>
        <?php endif; ?>

        <?php
        $i = 0;
        foreach ($data['values'] as $key => $value):
            $i++;
            ?>

            <div class="form-check form-check-inline">
                <input type="radio" id="custom-radio-<?php echo $data['id'] . '-' . $key; ?>" class="form-check-input" <?php if ($settings['required'] && $i == 1): ?>required<?php endif; ?> data-custom-field-id="<?php echo $data['id']; ?>" value="<?php echo $value; ?>"
                       name="<?php echo $data['name']; ?>">
                <label class="form-check-label" for="custom-radio-<?php echo $data['id'] . '-' . $key; ?>"><?php echo $value; ?></label>
            </div>
        <?php endforeach; ?>

        <?php if ($data['help']): ?>
            <small class="form-text text-muted"><?php echo $data['help']; ?></small>
        <?php endif; ?>

    </div>
</div>