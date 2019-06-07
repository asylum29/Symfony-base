require('../css/app.css');
const $ = require('jquery');
global.$ = global.jQuery = $;
require('bootstrap');
require('@dashboardcode/bsmultiselect');
require('select2');

$('.custom-file-input').on('change', function () {
    let fileName = $(this).val().split("\\").pop();
    $(this).next('.custom-file-label').html(fileName);
});

$('.bsmultiselect').bsMultiSelect();

$.fn.select2.defaults.set("theme", "bootstrap4");
$.fn.select2.amd.define('select2/i18n/ru', [], function () {
    return {
        errorLoading: function () {
            return 'Результат не может быть загружен.';
        },
        inputTooLong: function (args) {
            let overChars = args.input.length - args.maximum;
            let message = 'Пожалуйста, удалите ' + overChars + ' символ';
            if (overChars >= 2 && overChars <= 4) {
                message += 'а';
            } else if (overChars >= 5) {
                message += 'ов';
            }

            return message;
        },
        inputTooShort: function (args) {
            let remainingChars = args.minimum - args.input.length;
            let message = 'Пожалуйста, введите ' + remainingChars + ' или более символов';

            return message;
        },
        loadingMore: function () {
            return 'Загружаем ещё ресурсы…';
        },
        maximumSelected: function (args) {
            let message = 'Вы можете выбрать ' + args.maximum + ' элемент';
            if (args.maximum  >= 2 && args.maximum <= 4) {
                message += 'а';
            } else if (args.maximum >= 5) {
                message += 'ов';
            }

            return message;
        },
        noResults: function () {
            return 'Ничего не найдено';
        },
        searching: function () {
            return 'Поиск…';
        }
    };
});
$.fn.select2.defaults.set("language", "ru");
