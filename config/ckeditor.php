<?php
/**
 * конфигуратор ckeditor-ов
 *
 *
 * User: alexey
 * Date: 22.09.2017
 * Time: 13:33
 */

return[

        'preset' => 'custom',
        'clientOptions' => [
            'language' => 'ru',
            'toolbarGroups' =>[
                [
                    'name' => 'document',
                    'groups' => [ 'mode', 'document', 'doctools' ],
                ],
                [
                    'name' => 'clipboard',
                    'groups' => [ 'clipboard', 'undo' ],
                ],
                [
                    'name' => 'editing',
                    'groups' => [ 'find', 'selection', 'spellchecker', 'editing' ],
                ],
                [
                    'name' => 'forms',
                    'groups' => [ 'forms' ],
                ],

                [
                    'name' => 'basicstyles',
                    'groups' => [ 'basicstyles', 'cleanup' ],
                ],
                [
                    'name' => 'paragraph',
                    'groups' => [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ],
                ],
                '/',
                [
                    'name' => 'links',
                    'groups' => [ 'links' ],
                ],
                [
                    'name' => 'insert',
                    'groups' => [ 'insert' ],
                ],
                '/',
                [
                    'name' => 'styles',
                    'groups' => [ 'styles' ],
                ],
                [
                    'name' => 'colors',
                    'groups' => [ 'colors' ],
                ],
                [
                    'name' => 'tools',
                    'groups' => [ 'tools' ],
                ],
                [
                    'name' => 'others',
                    'groups' => [ 'others' ],
                ],
                [
                    'name' => 'about',
                    'groups' => [ 'about' ],
                ],
				
            ],

            'removeButtons' => 'Source,Save,Templates,CreateDiv,Blockquote,Language,Anchor,Unlink,Link,Image,HorizontalRule,Smiley,Iframe,Preview,Print,NewPage,HiddenField,ImageButton,Button,Select,Textarea,TextField,Radio,Checkbox,Form,Scayt,SelectAll,Find,Replace,Flash,Table,SpecialChar,PageBreak,About,Strike,Subscript,Superscript,BidiRtl,BidiLtr,CopyFormatting,Styles,PasteText,PasteFromWord',

        ],
];