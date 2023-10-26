<form method="POST" action="{{ route('ajax.post.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="title">Заголовок</label>
        <input type="text" name="title" id="title" class="form-control" placeholder="Заголовок">
    </div>
    <div class="form-group">
        <label for="content">Содержание статьи</label>
        <textarea name="content" id="content" class="form-control" placeholder="Содержание статьи"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Создать статью</button>
</form>
<script src="https://cdn.tiny.cloud/1/jlqeo6w6bfbqfpezuq3l96vgxlkasu16hp02lm1ko7oo6ue0/tinymce/6/tinymce.min.js"></script>
<script>
    {{--tinymce.init({--}}
    {{--    selector: 'textarea#content',--}}
    {{--    content_css: "{{ asset("css/style.css") }}",--}}
    {{--    theme_advanced_buttons1: "styleselect,image",--}}
    {{--    toolbar: 'styleselect image',--}}
    {{--    plugins: 'image', // Включите плагин "image--}}
    {{--    style_formats: [--}}
    {{--        {--}}
    {{--            title: 'My Foo styles'--}}
    {{--        },--}}
    {{--        {--}}
    {{--            title: 'big_text',--}}
    {{--            block: 'p',--}}
    {{--            classes: 'text-base md:text-2xl font-normal text-gray-500 mb-5',--}}
    {{--            exact: true--}}
    {{--        },--}}
    {{--        {--}}
    {{--            title: 'normal_text',--}}
    {{--            block: 'p',--}}
    {{--            classes: 'text-base md:text-lg font-normal text-gray-500 mb-5',--}}
    {{--            exact: true--}}
    {{--        },--}}
    {{--        {--}}
    {{--            title: 'h2',--}}
    {{--            block: 'h2',--}}
    {{--            classes: 'leading-tight text-2xl md:text-4xl font-bold mb-4 md:mb-5 dark:text-white',--}}
    {{--            exact: true--}}
    {{--        }--}}
    {{--    ],--}}
    {{--    images_upload_url: "{{ route('ajax.post.add_img') }}", // Замените на свой URL для загрузки изображений--}}
    {{--    images_upload_base_path: "{{asset('uploads')}}", // Путь для сохранения загруженных изображений--}}
    {{--});--}}
</script>
<script>
    tinymce.init({
        selector: 'textarea#content',
        theme_advanced_buttons1: "styleselect,image",
        content_css: "{{ asset("css/style.css") }}",
        style_formats: [
            {
                title: 'My Foo styles'
            },
            {
                title: 'big_text',
                block: 'p',
                classes: 'text-base md:text-2xl font-normal text-gray-500 mb-5',
                exact: true
            },
            {
                title: 'normal_text',
                block: 'p',
                classes: 'text-base md:text-lg font-normal text-gray-500 mb-5',
                exact: true
            },
            {
                title: 'h2',
                block: 'h2',
                classes: 'leading-tight text-2xl md:text-4xl font-bold mb-4 md:mb-5 dark:text-white',
                exact: true
            }
        ],
        plugins: 'image',
        toolbar: ' undo redo | bold italic underline strikethrough | styles |alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | removeformat',
        // toolbar: 'styleselect | image | aria-haspopup | fontselect ',
        images_upload_url: '{{ route('ajax.post.add_img') }}', // Указываете URL для обработки загрузки изображений на сервере
        automatic_uploads: true, // Автоматически загружать изображения после выбора
    });

</script>
