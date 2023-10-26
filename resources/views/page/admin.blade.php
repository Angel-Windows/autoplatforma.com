<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tiny.cloud/1/jlqeo6w6bfbqfpezuq3l96vgxlkasu16hp02lm1ko7oo6ue0/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <title>Document</title>
</head>
<body>
{{--<form action="{{route("ajax.post.store")}}" method="post">--}}
{{--    @csrf--}}
{{--    <div class="form-group">--}}
{{--        <label for="title">Заголовок</label>--}}
{{--        <input type="text" name="title" id="title" class="form-control" placeholder="Заголовок">--}}
{{--    </div>--}}
{{--    <div class="form-group">--}}
{{--        <label for="content">Содержание статьи</label>--}}
{{--        <textarea name="content" id="content" class="form-control" placeholder="Содержание статьи"></textarea>--}}
{{--    </div>--}}
{{--    <button type="submit" class="btn btn-primary">Создать статью</button>--}}
{{--</form>--}}
<x-forms.tinymce-editor/>
{{--<script>--}}
{{--    tinymce.init({--}}
{{--        selector: 'textarea#content',--}}
{{--        content_css: "{{asset("css/style.css")}}",--}}
{{--        theme_advanced_buttons1: "styleselect",--}}

{{--        style_formats: [{--}}
{{--            title: 'My Foo styles'--}}
{{--        }, {--}}
{{--            title: 'big_text',--}}
{{--            block: 'p',--}}
{{--            classes: 'text-base md:text-2xl font-normal text-gray-500 mb-5',--}}
{{--            exact: true--}}
{{--        }, {--}}
{{--            title: 'normal_text',--}}
{{--            block: 'p',--}}
{{--            classes: 'text-base md:text-lg font-normal text-gray-500 mb-5',--}}
{{--            exact: true--}}
{{--        }, {--}}
{{--            title: 'h2',--}}
{{--            block: 'h2',--}}
{{--            classes: 'leading-tight text-2xl md:text-4xl font-bold mb-4 md:mb-5 dark:text-white',--}}
{{--            exact: true--}}
{{--        }],--}}
{{--        plugins: 'image code',--}}
{{--        image_title: true,--}}
{{--        automatic_uploads: true,--}}
{{--        file_picker_types: 'image',--}}
{{--        file_picker_callback: (cb, value, meta) => {--}}
{{--            const input = document.createElement('input');--}}
{{--            input.setAttribute('type', 'file');--}}
{{--            input.setAttribute('accept', 'image/*');--}}

{{--            input.addEventListener('change', (e) => {--}}
{{--                const file = e.target.files[0];--}}

{{--                const reader = new FileReader();--}}
{{--                reader.addEventListener('load', () => {--}}
{{--                    /*--}}
{{--                      Note: Now we need to register the blob in TinyMCEs image blob--}}
{{--                      registry. In the next release this part hopefully won't be--}}
{{--                      necessary, as we are looking to handle it internally.--}}
{{--                    */--}}
{{--                    const id = 'blobid' + (new Date()).getTime();--}}
{{--                    const blobCache =  tinymce.activeEditor.editorUpload.blobCache;--}}
{{--                    const base64 = reader.result.split(',')[1];--}}
{{--                    const blobInfo = blobCache.create(id, file, base64);--}}
{{--                    blobCache.add(blobInfo);--}}

{{--                    /* call the callback and populate the Title field with the file name */--}}
{{--                    cb(blobInfo.blobUri(), { title: file.name });--}}
{{--                });--}}
{{--                reader.readAsDataURL(file);--}}
{{--            });--}}

{{--            input.click();--}}
{{--        },--}}
{{--        toolbar: 'undo redo | bold italic | alignleft aligncenter alignright alignjustify | link image | code',--}}
{{--        extended_valid_elements: 'table[class="table table-bordered"]'--}}
{{--        // setup: function (editor) {--}}
{{--        //     // Добавляем обработчик события, который будет применять классы к тегам <p>--}}
{{--        //     editor.on('init', function () {--}}
{{--        //         editor.dom.addClass(editor.getBody().getElementsByTagName('p'), 'text-base');--}}
{{--        //     });--}}
{{--        // }--}}
{{--    });--}}

{{--</script>--}}
</body>
</html>
