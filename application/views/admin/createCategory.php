<h2>Создать подкатегорию</h2>
<a href="<?php echo $data->getReturnUrl()?>" class='align-middle mb-3'><i class='fas fa-level-up-alt mr-1'></i>Вернуться</a>
<form method="post" enctype="multipart/form-data" class="mt-3">
    <?php
        $returnUrl = $data->getReturnUrl();
        echo "<input type='hidden' name='returnUrl' value='$returnUrl'>";
    ?>
    <div class="form-group">
        <label for="categoryName">Название категории</label>
        <input type="text" name="categoryName" required="required" id="categoryName" class="form-control" placeholder="Введите название для категории">
    </div>
    <div class="form-group">
        <label for="parentCategoryId">Родительская категория</label>
        <select name="parentCategoryId" class="custom-select" id="parentCategoryId">
            <?php
            $categories = $data->getParentCategories();
            $parentCategoryId = $data->getParentcategoryId();
            foreach ($categories as $category) {
                $categoryName = $category->getName();
                $categoryId = $category->getId();
                if ($parentCategoryId === $categoryId)
                    echo "<option value='$categoryId' selected='selected'>$categoryName</option>";
                else
                    echo "<option value='$categoryId'>$categoryName</option>";
            }
            ?>
        </select>
    </div>
    <div class="form-group custom-file">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000" />
        <input type="file" name="categoryImage" class="custom-file-input" id="categoryImage">
        <label for="categoryImage" class="custom-file-label">Выберите изображение категории</label>
    </div>
    <button type="submit" class="btn btn-success">Сохранить</button>
</form>