<script>
    $('.btn-remove').on('click',function(e){
        e.preventDefault();
        if(confirm('Запись будет удалена! Продолжить?')){
            $(this).closest('form').submit();
        }
    })
</script>
