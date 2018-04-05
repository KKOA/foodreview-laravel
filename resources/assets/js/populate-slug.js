$(document).ready(function(){

    //Create slug value if slug is empty
    $('#name').blur(function(){
        let nameVal = $(this).val();
        if($('#slug').val() === '')
        {
            slug = nameVal.toLowerCase();//Convert to lowercase
            slug = slug.replace(/[^a-z0-9-]+/g, "-"); //replace non (alphanumeric character & dashes) with dashes
            slug = slug.replace(/(^-+|-+$)/g, ""); //replace leading and trailing dashes                
            $('#slug').val(slug);
        }
    })
});
