/**
 * Super simple wysiwyg editor v0.8.9
 * https://summernote.org
 *
 * Copyright 2013- Alan Hong. and other contributors
 * summernote may be freely distributed under the MIT license.
 *
 * Date: 2017-12-25T06:39Z
 */
(function (global, factory) {
	typeof exports === 'object' && typeof module !== 'undefined' ? factory(require('jquery')) :
	typeof define === 'function' && define.amd ? define(['jquery'], factory) :
	(factory(global.jQuery));
}(this, (function ($$1) { 'use strict';

$$1 = $$1 && $$1.hasOwnProperty('default') ? $$1['default'] : $$1;

var Renderer = /** @class */ (function () {
    function Renderer(markup, children, options, callback) {
        this.markup = markup;
        this.children = children;
        this.options = options;
        this.callback = callback;
    }
    Renderer.prototype.render = function ($parent) {
        var $node = $$1(this.markup);
        if (this.options && this.options.contents) {
            $node.html(this.options.contents);
        }
        if (this.options && this.options.className) {
            $node.addClass(this.options.className);
        }
        if (this.options && this.options.data) {
            $$1.each(this.options.data, function (k, v) {
                $node.attr('data-' + k, v);
            });
        }
        if (this.options && this.options.click) {
            $node.on('click', this.options.click);
        }
        if (this.children) {
            var $container_1 = $node.find('.note-children-container');
            this.children.forEach(function (child) {
                child.render($container_1.length ? $container_1 : $node);
            });
        }
        if (this.callback) {
            this.callback($node, this.options);
        }
        if (this.options && this.options.callback) {
            this.options.callback($node);
        }
        if ($parent) {
            $parent.append($node);
        }
        return $node;
    };
    return Renderer;
}());
var renderer = {
    create: function (markup, callback) {
        return function () {
            var options = typeof arguments[1] === 'object' ? arguments[1] : arguments[0];
            var children = $$1.isArray(arguments[0]) ? arguments[0] : [];
            if (options && options.children) {
                children = options.children;
            }
            return new Renderer(markup, children, options, callback);
        };
    }
};

var TooltipUI = /** @class */ (function () {
    function TooltipUI($node, options) {
        this.$node = $node;
        this.options = $.extend({}, {
            title: '',
            target: options.container,
            trigger: 'hover focus',
            placement: 'bottom'
        }, options);
        // create tooltip node
        this.$tooltip = $([
            '<div class="note-tooltip in">',
            '  <div class="note-tooltip-arrow"/>',
            '  <div class="note-tooltip-content"/>',
            '</div>'
        ].join(''));
        // define event
        if (this.options.trigger !== 'manual') {
            var showCallback_1 = this.show.bind(this);
            var hideCallback_1 = this.hide.bind(this);
            var toggleCallback_1 = this.toggle.bind(this);
            this.options.trigger.split(' ').forEach(function (eventName) {
                if (eventName === 'hover') {
                    $node.off('mouseenter mouseleave');
                    $node.on('mouseenter', showCallback_1).on('mouseleave', hideCallback_1);
                }
                else if (eventName === 'click') {
                    $node.on('click', toggleCallback_1);
                }
                else if (eventName === 'focus') {
                    $node.on('focus', showCallback_1).on('blur', hideCallback_1);
                }
            });
        }
    }
    TooltipUI.prototype.show = function () {
        var $node = this.$node;
        var offset = $node.offset();
        var $tooltip = this.$tooltip;
        var title = this.options.title || $node.attr('title') || $node.data('title');
        var placement = this.options.placement || $node.data('placement');
        $tooltip.addClass(placement);
        $tooltip.addClass('in');
        $tooltip.find('.note-tooltip-content').text(title);
        $tooltip.appendTo(this.options.target);
        var nodeWidth = $node.outerWidth();
        var nodeHeight = $node.outerHeight();
        var tooltipWidth = $tooltip.outerWidth();
        var tooltipHeight = $tooltip.outerHeight();
        if (placement === 'bottom') {
            $tooltip.css({
                top: offset.top + nodeHeight,
                left: offset.left + (nodeWidth / 2 - tooltipWidth / 2)
            });
        }
        else if (placement === 'top') {
            $tooltip.css({
                top: offset.top - tooltipHeight,
                left: offset.left + (nodeWidth / 2 - tooltipWidth / 2)
            });
        }
        else if (placement === 'left') {
            $tooltip.css({
                top: offset.top + (nodeHeight / 2 - tooltipHeight / 2),
                left: offset.left - tooltipWidth
            });
        }
        else if (placement === 'right') {
            $tooltip.css({
                top: offset.top + (nodeHeight / 2 - tooltipHeight / 2),
                left: offset.left + nodeWidth
            });
        }
    };
    TooltipUI.prototype.hide = function () {
        this.$tooltip.removeClass('in');
        this.$tooltip.remove();
    };
    TooltipUI.prototype.toggle = function () {
        if (this.$tooltip.hasClass('in')) {
            this.hide();
        }
        else {
            this.show();
        }
    };
    return TooltipUI;
}());

var DropdownUI = /** @class */ (function () {
    function DropdownUI($node, options) {
        this.$button = $node;
        this.options = $.extend({}, {
            target: options.container
        }, options);
        this.setEvent();
    }
    DropdownUI.prototype.setEvent = function () {
        this.$button.on('click', this.toggle.bind(this));
    };
    DropdownUI.prototype.clear = function () {
        var $parent = $('.note-btn-group.open');
        $parent.find('.note-btn.active').removeClass('active');
        $parent.removeClass('open');
    };
    DropdownUI.prototype.show = function () {
        this.$button.addClass('active');
        this.$button.parent().addClass('open');
        var $dropdown = this.$button.next();
        var offset = $dropdown.offset();
        var width = $dropdown.outerWidth();
        var windowWidth = $(window).width();
        var targetMarginRight = parseFloat($(this.options.target).css('margin-right'));
        if (offset.left + width > windowWidth - targetMarginRight) {
            $dropdown.css('margin-left', windowWidth - targetMarginRight - (offset.left + width));
        }
        else {
            $dropdown.css('margin-left', '');
        }
    };
    DropdownUI.prototype.hide = function () {
        this.$button.removeClass('active');
        this.$button.parent().removeClass('open');
    };
    DropdownUI.prototype.toggle = function () {
        var isOpened = this.$button.parent().hasClass('open');
        this.clear();
        if (isOpened) {
            this.hide();
        }
        else {
            this.show();
        }
    };
    return DropdownUI;
}());
$(document).on('click', function (e) {
    if (!$(e.target).closest('.note-btn-group').length) {
        $('.note-btn-group.open').removeClass('open');
    }
});
$(document).on('click.note-dropdown-menu', function (e) {
    $(e.target).closest('.note-dropdown-menu').parent().removeClass('open');
});

var ModalUI = /** @class */ (function () {
    function ModalUI($node, options) {
        this.options = $.extend({}, {
            target: options.container || 'body'
        }, options);
        this.$modal = $node;
        this.$backdrop = $('<div class="note-modal-backdrop" />');
    }
    ModalUI.prototype.show = function () {
        if (this.options.target === 'body') {
            this.$backdrop.css('position', 'fixed');
            this.$modal.css('position', 'fixed');
        }
        else {
            this.$backdrop.css('position', 'absolute');
            this.$modal.css('position', 'absolute');
        }
        this.$backdrop.appendTo(this.options.target).show();
        this.$modal.appendTo(this.options.target).addClass('open').show();
        this.$modal.trigger('note.modal.show');
        this.$modal.off('click', '.close').on('click', '.close', this.hide.bind(this));
    };
    ModalUI.prototype.hide = function () {
        this.$modal.removeClass('open').hide();
        this.$backdrop.hide();
        this.$modal.trigger('note.modal.hide');
    };
    return ModalUI;
}());

var editor = renderer.create('<div class="note-editor note-frame"/>');
var toolbar = renderer.create('<div class="note-toolbar"/>');
var editingArea = renderer.create('<div class="note-editing-area"/>');
var codable = renderer.create('<textarea class="note-codable"/>');
var editable = renderer.create('<div class="note-editable" contentEditable="true"/>');
var statusbar = renderer.create([
    '<div class="note-statusbar">',
    '  <div class="note-resizebar">',
    '    <div class="note-icon-bar"/>',
    '    <div class="note-icon-bar"/>',
    '    <div class="note-icon-bar"/>',
    '  </div>',
    '</div>'
].join(''));
var airEditor = renderer.create('<div class="note-editor"/>');
var airEditable = renderer.create('<div class="note-editable" contentEditable="true"/>');
var buttonGroup = renderer.create('<div class="note-btn-group">');
var button = renderer.create('<button type="button" class="note-btn">', function ($node, options) {
    // set button type
    if (options && options.tooltip) {
        $node.data('_lite_tooltip', new TooltipUI($node, {
            title: options.tooltip,
            container: options.container
        }));
    }
    if (options.contents) {
        $node.html(options.contents);
    }
    if (options && options.data && options.data.toggle === 'dropdown') {
        $node.data('_lite_dropdown', new DropdownUI($node, {
            container: options.container
        }));
    }
});
var dropdown = renderer.create('<div class="note-dropdown-menu">', function ($node, options) {
    var markup = $.isArray(options.items) ? options.items.map(function (item) {
        var value = (typeof item === 'string') ? item : (item.value || '');
        var content = options.template ? options.template(item) : item;
        var $temp = $('<a class="note-dropdown-item" href="#" data-value="' + value + '"></a>');
        $temp.html(content).data('item', item);
        return $temp;
    }) : options.items;
    $node.html(markup);
    $node.on('click', '> .note-dropdown-item', function (e) {
        var $a = $(this);
        var item = $a.data('item');
        var value = $a.data('value');
        if (item.click) {
            item.click($a);
        }
        else if (options.itemClick) {
            options.itemClick(e, item, value);
        }
    });
});
var dropdownCheck = renderer.create('<div class="note-dropdown-menu note-check">', function ($node, options) {
    var markup = $.isArray(options.items) ? options.items.map(function (item) {
        var value = (typeof item === 'string') ? item : (item.value || '');
        var content = options.template ? options.template(item) : item;
        var $temp = $('<a class="note-dropdown-item" href="#" data-value="' + value + '"></a>');
        $temp.html([icon(options.checkClassName), ' ', content]).data('item', item);
        return $temp;
    }) : options.items;
    $node.html(markup);
    $node.on('click', '> .note-dropdown-item', function (e) {
        var $a = $(this);
        var item = $a.data('item');
        var value = $a.data('value');
        if (item.click) {
            item.click($a);
        }
        else if (options.itemClick) {
            options.itemClick(e, item, value);
        }
    });
});
var dropdownButtonContents = function (contents, options) {
    return contents + ' ' + icon(options.icons.caret, 'span');
};
var dropdownButton = function (opt, callback) {
    return buttonGroup([
        button({
            className: 'dropdown-toggle',
            contents: opt.title + ' ' + icon('note-icon-caret'),
            tooltip: opt.tooltip,
            data: {
                toggle: 'dropdown'
            }
        }),
        dropdown({
            className: opt.className,
            items: opt.items,
            template: opt.template,
            itemClick: opt.itemClick
        })
    ], { callback: callback }).render();
};
var dropdownCheckButton = function (opt, callback) {
    return buttonGroup([
        button({
            className: 'dropdown-toggle',
            contents: opt.title + ' ' + icon('note-icon-caret'),
            tooltip: opt.tooltip,
            data: {
                toggle: 'dropdown'
            }
        }),
        dropdownCheck({
            className: opt.className,
            checkClassName: opt.checkClassName,
            items: opt.items,
            template: opt.template,
            itemClick: opt.itemClick
        })
    ], { callback: callback }).render();
};
var paragraphDropdownButton = function (opt) {
    return buttonGroup([
        button({
            className: 'dropdown-toggle',
            contents: opt.title + ' ' + icon('note-icon-caret'),
            tooltip: opt.tooltip,
            data: {
                toggle: 'dropdown'
            }
        }),
        dropdown([
            buttonGroup({
                className: 'note-align',
                children: opt.items[0]
            }),
            buttonGroup({
                className: 'note-list',
                children: opt.items[1]
            })
        ])
    ]).render();
};
var tableMoveHandler = function (event, col, row) {
    var PX_PER_EM = 18;
    var $picker = $(event.target.parentNode); // target is mousecatcher
    var $dimensionDisplay = $picker.next();
    var $catcher = $picker.find('.note-dimension-picker-mousecatcher');
    var $highlighted = $picker.find('.note-dimension-picker-highlighted');
    var $unhighlighted = $picker.find('.note-dimension-picker-unhighlighted');
    var posOffset;
    // HTML5 with jQuery - e.offsetX is undefined in Firefox
    if (event.offsetX === undefined) {
        var posCatcher = $(event.target).offset();
        posOffset = {
            x: event.pageX - posCatcher.left,
            y: event.pageY - posCatcher.top
        };
    }
    else {
        posOffset = {
            x: event.offsetX,
            y: event.offsetY
        };
    }
    var dim = {
        c: Math.ceil(posOffset.x / PX_PER_EM) || 1,
        r: Math.ceil(posOffset.y / PX_PER_EM) || 1
    };
    $highlighted.css({ width: dim.c + 'em', height: dim.r + 'em' });
    $catcher.data('value', dim.c + 'x' + dim.r);
    if (dim.c > 3 && dim.c < col) {
        $unhighlighted.css({ width: dim.c + 1 + 'em' });
    }
    if (dim.r > 3 && dim.r < row) {
        $unhighlighted.css({ height: dim.r + 1 + 'em' });
    }
    $dimensionDisplay.html(dim.c + ' x ' + dim.r);
};
var tableDropdownButton = function (opt) {
    return buttonGroup([
        button({
            className: 'dropdown-toggle',
            contents: opt.title + ' ' + icon('note-icon-caret'),
            tooltip: opt.tooltip,
            data: {
                toggle: 'dropdown'
            }
        }),
        dropdown({
            className: 'note-table',
            items: [
                '<div class="note-dimension-picker">',
                '  <div class="note-dimension-picker-mousecatcher" data-event="insertTable" data-value="1x1"/>',
                '  <div class="note-dimension-picker-highlighted"/>',
                '  <div class="note-dimension-picker-unhighlighted"/>',
                '</div>',
                '<div class="note-dimension-display">1 x 1</div>'
            ].join('')
        })
    ], {
        callback: function ($node) {
            var $catcher = $node.find('.note-dimension-picker-mousecatcher');
            $catcher.css({
                width: opt.col + 'em',
                height: opt.row + 'em'
            })
                .mousedown(opt.itemClick)
                .mousemove(function (e) {
                tableMoveHandler(e, opt.col, opt.row);
            });
        }
    }).render();
};
var palette = renderer.create('<div class="note-color-palette"/>', function ($node, options) {
    var contents = [];
    for (var row = 0, rowSize = options.colors.length; row < rowSize; row++) {
        var eventName = options.eventName;
        var colors = options.colors[row];
        var buttons = [];
        for (var col = 0, colSize = colors.length; col < colSize; col++) {
            var color = colors[col];
            buttons.push([
                '<button type="button" class="note-btn note-color-btn"',
                'style="background-color:', color, '" ',
                'data-event="', eventName, '" ',
                'data-value="', color, '" ',
                'title="', color, '" ',
                'data-toggle="button" tabindex="-1"></button>'
            ].join(''));
        }
        contents.push('<div class="note-color-row">' + buttons.join('') + '</div>');
    }
    $node.html(contents.join(''));
    $node.find('.note-color-btn').each(function () {
        $(this).data('_lite_tooltip', new TooltipUI($(this), {
            container: options.container
        }));
    });
});
var colorDropdownButton = function (opt, type) {
    return buttonGroup({
        className: 'note-color',
        children: [
            button({
                className: 'note-current-color-button',
                contents: opt.title,
                tooltip: opt.lang.color.recent,
                click: opt.currentClick,
                callback: function ($button) {
                    var $recentColor = $button.find('.note-recent-color');
                    if (type !== 'foreColor') {
                        $recentColor.css('background-color', '#FFFF00');
                        $button.attr('data-backColor', '#FFFF00');
                    }
                }
            }),
            button({
                className: 'dropdown-toggle',
                contents: icon('note-icon-caret'),
                tooltip: opt.lang.color.more,
                data: {
                    toggle: 'dropdown'
                }
            }),
            dropdown({
                items: [
                    '<div>',
                    '<div class="note-btn-group btn-background-color">',
                    '  <div class="note-palette-title">' + opt.lang.color.background + '</div>',
                    '  <div>',
                    '<button type="button" class="note-color-reset note-btn note-btn-block" ' +
                        ' data-event="backColor" data-value="inherit">',
                    opt.lang.color.transparent,
                    '    </button>',
                    '  </div>',
                    '  <div class="note-holder" data-event="backColor"/>',
                    '</div>',
                    '<div class="note-btn-group btn-foreground-color">',
                    '  <div class="note-palette-title">' + opt.lang.color.foreground + '</div>',
                    '  <div>',
                    '<button type="button" class="note-color-reset note-btn note-btn-block" ' +
                        ' data-event="removeFormat" data-value="foreColor">',
                    opt.lang.color.resetToDefault,
                    '    </button>',
                    '  </div>',
                    '  <div class="note-holder" data-event="foreColor"/>',
                    '</div>',
                    '</div>'
                ].join(''),
                callback: function ($dropdown) {
                    $dropdown.find('.note-holder').each(function () {
                        var $holder = $(this);
                        $holder.append(palette({
                            colors: opt.colors,
                            eventName: $holder.data('event')
                        }).render());
                    });
                    if (type === 'fore') {
                        $dropdown.find('.btn-background-color').hide();
                        $dropdown.css({ 'min-width': '210px' });
                    }
                    else if (type === 'back') {
                        $dropdown.find('.btn-foreground-color').hide();
                        $dropdown.css({ 'min-width': '210px' });
                    }
                },
                click: function (event) {
                    var $button = $(event.target);
                    var eventName = $button.data('event');
                    var value = $button.data('value');
                    if (eventName && value) {
                        var key = eventName === 'backColor' ? 'background-color' : 'color';
                        var $color = $button.closest('.note-color').find('.note-recent-color');
                        var $currentButton = $button.closest('.note-color').find('.note-current-color-button');
                        $color.css(key, value);
                        $currentButton.attr('data-' + eventName, value);
                        if (type === 'fore') {
                            opt.itemClick('foreColor', value);
                        }
                        else if (type === 'back') {
                            opt.itemClick('backColor', value);
                        }
                        else {
                            opt.itemClick(eventName, value);
                        }
                    }
                }
            })
        ]
    }).render();
};
var dialog = renderer.create('<div class="note-modal" tabindex="-1"/>', function ($node, options) {
    if (options.fade) {
        $node.addClass('fade');
    }
    $node.html([
        '  <div class="note-modal-content">',
        (options.title
            ? '    <div class="note-modal-header">' +
                '      <button type="button" class="close"><i class="note-icon-close"></i></button>' +
                '      <h4 class="note-modal-title">' + options.title + '</h4>' +
                '    </div>' : ''),
        '    <div class="note-modal-body">' + options.body + '</div>',
        (options.footer
            ? '    <div class="note-modal-footer">' + options.footer + '</div>' : ''),
        '  </div>'
    ].join(''));
    $node.data('modal', new ModalUI($node, options));
});
var videoDialog = function (opt) {
    var body = '<div class="note-form-group">' +
        '<label class="note-form-label">' +
        opt.lang.video.url + ' <small class="text-muted">' +
        opt.lang.video.providers + '</small>' +
        '</label>' +
        '<input class="note-video-url note-input" type="text" />' +
        '</div>';
    var footer = [
        '<button type="button" href="#" class="note-btn note-btn-primary note-video-btn disabled" disabled>',
        opt.lang.video.insert,
        '</button>'
    ].join('');
    return dialog({
        title: opt.lang.video.insert,
        fade: opt.fade,
        body: body,
        footer: footer
    }).render();
};
var imageDialog = function (opt) {
    var body = '<div class="note-form-group note-group-select-from-files">' +
        '<label class="note-form-label">' + opt.lang.image.selectFromFiles + '</label>' +
        '<input class="note-note-image-input note-input" type="file" name="files" accept="image/*" multiple="multiple" />' +
        opt.imageLimitation +
        '</div>' +
        '<div class="note-form-group" style="overflow:auto;">' +
        '<label class="note-form-label">' + opt.lang.image.url + '</label>' +
        '<input class="note-image-url note-input" type="text" />' +
        '</div>';
    var footer = [
        '<button href="#" type="button" class="note-btn note-btn-primary note-btn-large note-image-btn disabled" disabled>',
        opt.lang.image.insert,
        '</button>'
    ].join('');
    return dialog({
        title: opt.lang.image.insert,
        fade: opt.fade,
        body: body,
        footer: footer
    }).render();
};
var linkDialog = function (opt) {
    var body = '<div class="note-form-group">' +
        '<label class="note-form-label">' + opt.lang.link.textToDisplay + '</label>' +
        '<input class="note-link-text note-input" type="text" />' +
        '</div>' +
        '<div class="note-form-group">' +
        '<label class="note-form-label">' + opt.lang.link.url + '</label>' +
        '<input class="note-link-url note-input" type="text" value="http://" />' +
        '</div>' +
        (!opt.disableLinkTarget
            ? '<div class="checkbox">' +
                '<label>' + '<input type="checkbox" checked> ' + opt.lang.link.openInNewWindow + '</label>' +
                '</div>' : '');
    var footer = [
        '<button href="#" type="button" class="note-btn note-btn-primary note-link-btn disabled" disabled>',
        opt.lang.link.insert,
        '</button>'
    ].join('');
    return dialog({
        className: 'link-dialog',
        title: opt.lang.link.insert,
        fade: opt.fade,
        body: body,
        footer: footer
    }).render();
};
var popover = renderer.create([
    '<div class="note-popover bottom">',
    '  <div class="note-popover-arrow"/>',
    '  <div class="note-popover-content note-children-container"/>',
    '</div>'
].join(''), function ($node, options) {
    var direction = typeof options.direction !== 'undefined' ? options.direction : 'bottom';
    $node.addClass(direction).hide();
    if (options.hideArrow) {
        $node.find('.note-popover-arrow').hide();
    }
});
var checkbox = renderer.create('<div class="checkbox"></div>', function ($node, options) {
    $node.html([
        ' <label' + (options.id ? ' for="' + options.id + '"' : '') + '>',
        ' <input type="checkbox"' + (options.id ? ' id="' + options.id + '"' : ''),
        (options.checked ? ' checked' : '') + '/>',
        (options.text ? options.text : ''),
        '</label>'
    ].join(''));
});
var icon = function (iconClassName, tagName) {
    tagName = tagName || 'i';
    return '<' + tagName + ' class="' + iconClassName + '"/>';
};
var ui = {
    editor: editor,
    toolbar: toolbar,
    editingArea: editingArea,
    codable: codable,
    editable: editable,
    statusbar: statusbar,
    airEditor: airEditor,
    airEditable: airEditable,
    buttonGroup: buttonGroup,
    button: button,
    dropdown: dropdown,
    dropdownCheck: dropdownCheck,
    dropdownButton: dropdownButton,
    dropdownButtonContents: dropdownButtonContents,
    dropdownCheckButton: dropdownCheckButton,
    paragraphDropdownButton: paragraphDropdownButton,
    tableDropdownButton: tableDropdownButton,
    colorDropdownButton: colorDropdownButton,
    palette: palette,
    dialog: dialog,
    videoDialog: videoDialog,
    imageDialog: imageDialog,
    linkDialog: linkDialog,
    popover: popover,
    checkbox: checkbox,
    icon: icon,
    toggleBtn: function ($btn, isEnable) {
        $btn.toggleClass('disabled', !isEnable);
        $btn.attr('disabled', !isEnable);
    },
    toggleBtnActive: function ($btn, isActive) {
        $btn.toggleClass('active', isActive);
    },
    check: function ($dom, value) {
        $dom.find('.checked').removeClass('checked');
        $dom.find('[data-value="' + value + '"]').addClass('checked');
    },
    onDialogShown: function ($dialog, handler) {
        $dialog.one('note.modal.show', handler);
    },
    onDialogHidden: function ($dialog, handler) {
        $dialog.one('note.modal.hide', handler);
    },
    showDialog: function ($dialog) {
        $dialog.data('modal').show();
    },
    hideDialog: function ($dialog) {
        $dialog.data('modal').hide();
    },
    /**
     * get popover content area
     *
     * @param $popover
     * @returns {*}
     */
    getPopoverContent: function ($popover) {
        return $popover.find('.note-popover-content');
    },
    /**
     * get dialog's body area
     *
     * @param $dialog
     * @returns {*}
     */
    getDialogBody: function ($dialog) {
        return $dialog.find('.note-modal-body');
    },
    createLayout: function ($note, options) {
        var $editor = (options.airMode ? ui.airEditor([
            ui.editingArea([
                ui.airEditable()
            ])
        ]) : ui.editor([
            ui.toolbar(),
            ui.editingArea([
                ui.codable(),
                ui.editable()
            ]),
            ui.statusbar()
        ])).render();
        $editor.insertAfter($note);
        return {
            note: $note,
            editor: $editor,
            toolbar: $editor.find('.note-toolbar'),
            editingArea: $editor.find('.note-editing-area'),
            editable: $editor.find('.note-editable'),
            codable: $editor.find('.note-codable'),
            statusbar: $editor.find('.note-statusbar')
        };
    },
    removeLayout: function ($note, layoutInfo) {
        $note.html(layoutInfo.editable.html());
        layoutInfo.editor.remove();
        $note.off('summernote'); // remove summernote custom event
        $note.show();
    }
};

$$1.summernote = $$1.summernote || {
    lang: {}
};
$$1.extend($$1.summernote.lang, {
    'en-US': {
        font: {
            bold: 'Bold',
            italic: 'Italic',
            underline: 'Underline',
            clear: 'Remove Font Style',
            height: 'Line Height',
            name: 'Font Family',
            strikethrough: 'Strikethrough',
            subscript: 'Subscript',
            superscript: 'Superscript',
            size: 'Font Size'
        },
        image: {
            image: 'Picture',
            insert: 'Insert Image',
            resizeFull: 'Resize Full',
            resizeHalf: 'Resize Half',
            resizeQuarter: 'Resize Quarter',
            floatLeft: 'Float Left',
            floatRight: 'Float Right',
            floatNone: 'Float None',
            shapeRounded: 'Shape: Rounded',
            shapeCircle: 'Shape: Circle',
            shapeThumbnail: 'Shape: Thumbnail',
            shapeNone: 'Shape: None',
            dragImageHere: 'Drag image or text here',
            dropImage: 'Drop image or Text',
            selectFromFiles: 'Select from files',
            maximumFileSize: 'Maximum file size',
            maximumFileSizeError: 'Maximum file size exceeded.',
            url: 'Image URL',
            remove: 'Remove Image',
            original: 'Original'
        },
        video: {
            video: 'Video',
            videoLink: 'Video Link',
            insert: 'Insert Video',
            url: 'Video URL',
            providers: '(YouTube, Vimeo, Vine, Instagram, DailyMotion or Youku)'
        },
        link: {
            link: 'Link',
            insert: 'Insert Link',
            unlink: 'Unlink',
            edit: 'Edit',
            textToDisplay: 'Text to display',
            url: 'To what URL should this link go?',
            openInNewWindow: 'Open in new window'
        },
        table: {
            table: 'Table',
            addRowAbove: 'Add row above',
            addRowBelow: 'Add row below',
            addColLeft: 'Add column left',
            addColRight: 'Add column right',
            delRow: 'Delete row',
            delCol: 'Delete column',
            delTable: 'Delete table'
        },
        hr: {
            insert: 'Insert Horizontal Rule'
        },
        style: {
            style: 'Style',
            p: 'Normal',
            blockquote: 'Quote',
            pre: 'Code',
            h1: 'Header 1',
            h2: 'Header 2',
            h3: 'Header 3',
            h4: 'Header 4',
            h5: 'Header 5',
            h6: 'Header 6'
        },
        lists: {
            unordered: 'Unordered list',
            ordered: 'Ordered list'
        },
        options: {
            help: 'Help',
            fullscreen: 'Full Screen',
            codeview: 'Code View'
        },
        paragraph: {
            paragraph: 'Paragraph',
            outdent: 'Outdent',
            indent: 'Indent',
            left: 'Align left',
            center: 'Align center',
            right: 'Align right',
            justify: 'Justify full'
        },
        color: {
            recent: 'Recent Color',
            more: 'More Color',
            background: 'Background Color',
            foreground: 'Foreground Color',
            transparent: 'Transparent',
            setTransparent: 'Set transparent',
            reset: 'Reset',
            resetToDefault: 'Reset to default'
        },
        shortcut: {
            shortcuts: 'Keyboard shortcuts',
            close: 'Close',
            textFormatting: 'Text formatting',
            action: 'Action',
            paragraphFormatting: 'Paragraph formatting',
            documentStyle: 'Document Style',
            extraKeys: 'Extra keys'
        },
        help: {
            'insertParagraph': 'Insert Paragraph',
            'undo': 'Undoes the last command',
            'redo': 'Redoes the last command',
            'tab': 'Tab',
            'untab': 'Untab',
            'bold': 'Set a bold style',
            'italic': 'Set a italic style',
            'underline': 'Set a underline style',
            'strikethrough': 'Set a strikethrough style',
            'removeFormat': 'Clean a style',
            'justifyLeft': 'Set left align',
            'justifyCenter': 'Set center align',
            'justifyRight': 'Set right align',
            'justifyFull': 'Set full align',
            'insertUnorderedList': 'Toggle unordered list',
            'insertOrderedList': 'Toggle ordered list',
            'outdent': 'Outdent on current paragraph',
            'indent': 'Indent on current paragraph',
            'formatPara': 'Change current block\'s format as a paragraph(P tag)',
            'formatH1': 'Change current block\'s format as H1',
            'formatH2': 'Change current block\'s format as H2',
            'formatH3': 'Change current block\'s format as H3',
            'formatH4': 'Change current block\'s format as H4',
            'formatH5': 'Change current block\'s format as H5',
            'formatH6': 'Change current block\'s format as H6',
            'insertHorizontalRule': 'Insert horizontal rule',
            'linkDialog.show': 'Show Link Dialog'
        },
        history: {
            undo: 'Undo',
            redo: 'Redo'
        },
        specialChar: {
            specialChar: 'SPECIAL CHARACTERS',
            select: 'Select Special characters'
        }
    }
});

var isSupportAmd = typeof define === 'function' && define.amd; // eslint-disable-line
/**
 * returns whether font is installed or not.
 *
 * @param {String} fontName
 * @return {Boolean}
 */
function isFontInstalled(fontName) {
    var testFontName = fontName === 'Comic Sans MS' ? 'Courier New' : 'Comic Sans MS';
    var $tester = $$1('<div>').css({
        position: 'absolute',
        left: '-9999px',
        top: '-9999px',
        fontSize: '200px'
    }).text('mmmmmmmmmwwwwwww').appendTo(document.body);
    var originalWidth = $tester.css('fontFamily', testFontName).width();
    var width = $tester.css('fontFamily', fontName + ',' + testFontName).width();
    $tester.remove();
    return originalWidth !== width;
}
var userAgent = navigator.userAgent;
var isMSIE = /MSIE|Trident/i.test(userAgent);
var browserVersion;
if (isMSIE) {
    var matches = /MSIE (\d+[.]\d+)/.exec(userAgent);
    if (matches) {
        browserVersion = parseFloat(matches[1]);
    }
    matches = /Trident\/.*rv:([0-9]{1,}[.0-9]{0,})/.exec(userAgent);
    if (matches) {
        browserVersion = parseFloat(matches[1]);
    }
}
var isEdge = /Edge\/\d+/.test(userAgent);
var hasCodeMirror = !!window.CodeMirror;
if (!hasCodeMirror && isSupportAmd) {
    // Webpack
    if (typeof __webpack_require__ === 'function') {
        try {
            // If CodeMirror can't be resolved, `require.resolve` will throw an
            // exception and `hasCodeMirror` won't be set to `true`.
            require.resolve('codemirror');
            hasCodeMirror = true;
        }
        catch (e) {
            // do nothing
        }
    }
    else if (typeof require !== 'undefined') {
        // Browserify
        if (typeof require.resolve !== 'undefined') {
            try {
                // If CodeMirror can't be resolved, `require.resolve` will throw an
                // exception and `hasCodeMirror` won't be set to `true`.
                require.resolve('codemirror');
                hasCodeMirror = true;
            }
            catch (e) {
                // do nothing
            }
            // Almond/Require
        }
        else if (typeof require.specified !== 'undefined') {
            hasCodeMirror = require.specified('codemirror');
        }
    }
}
var isSupportTouch = (('ontouchstart' in window) ||
    (navigator.MaxTouchPoints > 0) ||
    (navigator.msMaxTouchPoints > 0));
// [workaround] IE doesn't have input events for contentEditable
// - see: https://goo.gl/4bfIvA
var inputEventName = (isMSIE || isEdge) ? 'DOMCharacterDataModified DOMSubtreeModified DOMNodeInserted' : 'input';
/**
 * @class core.env
 *
 * Object which check platform and agent
 *
 * @singleton
 * @alternateClassName env
 */
var env = {
    isMac: navigator.appVersion.indexOf('Mac') > -1,
    isMSIE: isMSIE,
    isEdge: isEdge,
    isFF: !isEdge && /firefox/i.test(userAgent),
    isPhantom: /PhantomJS/i.test(userAgent),
    isWebkit: !isEdge && /webkit/i.test(userAgent),
    isChrome: !isEdge && /chrome/i.test(userAgent),
    isSafari: !isEdge && /safari/i.test(userAgent),
    browserVersion: browserVersion,
    jqueryVersion: parseFloat($$1.fn.jquery),
    isSupportAmd: isSupportAmd,
    isSupportTouch: isSupportTouch,
    hasCodeMirror: hasCodeMirror,
    isFontInstalled: isFontInstalled,
    isW3CRangeSupport: !!document.createRange,
    inputEventName: inputEventName
};

/**
 * @class core.func
 *
 * func utils (for high-order func's arg)
 *
 * @singleton
 * @alternateClassName func
 */
function eq(itemA) {
    return function (itemB) {
        return itemA === itemB;
    };
}
function eq2(itemA, itemB) {
    return itemA === itemB;
}
function peq2(propName) {
    return function (itemA, itemB) {
        return itemA[propName] === itemB[propName];
    };
}
function ok() {
    return true;
}
function fail() {
    return false;
}
function not(f) {
    return function () {
        return !f.apply(f, arguments);
    };
}
function and(fA, fB) {
    return function (item) {
        return fA(item) && fB(item);
    };
}
function self(a) {
    return a;
}
function invoke(obj, method) {
    return function () {
        return obj[method].apply(obj, arguments);
    };
}
var idCounter = 0;
/**
 * generate a globally-unique id
 *
 * @param {String} [prefix]
 */
function uniqueId(prefix) {
    var id = ++idCounter + '';
    return prefix ? prefix + id : id;
}
/**
 * returns bnd (bounds) from rect
 *
 * - IE Compatibility Issue: http://goo.gl/sRLOAo
 * - Scroll Issue: http://goo.gl/sNjUc
 *
 * @param {Rect} rect
 * @return {Object} bounds
 * @return {Number} bounds.top
 * @return {Number} bounds.left
 * @return {Number} bounds.width
 * @return {Number} bounds.height
 */
function rect2bnd(rect) {
    var $document = $(document);
    return {
        top: rect.top + $document.scrollTop(),
        left: rect.left + $document.scrollLeft(),
        width: rect.right - rect.left,
        height: rect.bottom - rect.top
    };
}
/**
 * returns a copy of the object where the keys have become the values and the values the keys.
 * @param {Object} obj
 * @return {Object}
 */
function invertObject(obj) {
    var inverted = {};
    for (var key in obj) {
        if (obj.hasOwnProperty(key)) {
            inverted[obj[key]] = key;
        }
    }
    return inverted;
}
/**
 * @param {String} namespace
 * @param {String} [prefix]
 * @return {String}
 */
function namespaceToCamel(namespace, prefix) {
    prefix = prefix || '';
    return prefix + namespace.split('.').map(function (name) {
        return name.substring(0, 1).toUpperCase() + name.substring(1);
    }).join('');
}
/**
 * Returns a function, that, as long as it continues to be invoked, will not
 * be triggered. The function will be called after it stops being called for
 * N milliseconds. If `immediate` is passed, trigger the function on the
 * leading edge, instead of the trailing.
 * @param {Function} func
 * @param {Number} wait
 * @param {Boolean} immediate
 * @return {Function}
 */
function debounce(func, wait, immediate) {
    var _this = this;
    var timeout;
    return function () {
        var context = _this;
        var args = arguments;
        var later = function () {
            timeout = null;
            if (!immediate) {
                func.apply(context, args);
            }
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if (callNow) {
            func.apply(context, args);
        }
    };
}
var func = {
    eq: eq,
    eq2: eq2,
    peq2: peq2,
    ok: ok,
    fail: fail,
    self: self,
    not: not,
    and: and,
    invoke: invoke,
    uniqueId: uniqueId,
    rect2bnd: rect2bnd,
    invertObject: invertObject,
    namespaceToCamel: namespaceToCamel,
    debounce: debounce
};

/**
 * returns the first item of an array.
 *
 * @param {Array} array
 */
function head(array) {
    return array[0];
}
/**
 * returns the last item of an array.
 *
 * @param {Array} array
 */
function last(array) {
    return array[array.length - 1];
}
/**
 * returns everything but the last entry of the array.
 *
 * @param {Array} array
 */
function initial(array) {
    return array.slice(0, array.length - 1);
}
/**
 * returns the rest of the items in an array.
 *
 * @param {Array} array
 */
function tail(array) {
    return array.slice(1);
}
/**
 * returns item of array
 */
function find(array, pred) {
    for (var idx = 0, len = array.length; idx < len; idx++) {
        var item = array[idx];
        if (pred(item)) {
            return item;
        }
    }
}
/**
 * returns true if all of the values in the array pass the predicate truth test.
 */
function all(array, pred) {
    for (var idx = 0, len = array.length; idx < len; idx++) {
        if (!pred(array[idx])) {
            return false;
        }
    }
    return true;
}
/**
 * returns index of item
 */
function indexOf(array, item) {
    return $$1.inArray(item, array);
}
/**
 * returns true if the value is present in the list.
 */
function contains(array, item) {
    return indexOf(array, item) !== -1;
}
/**
 * get sum from a list
 *
 * @param {Array} array - array
 * @param {Function} fn - iterator
 */
function sum(array, fn) {
    fn = fn || func.self;
    return array.reduce(function (memo, v) {
        return memo + fn(v);
    }, 0);
}
/**
 * returns a copy of the collection with array type.
 * @param {Collection} collection - collection eg) node.childNodes, ...
 */
function from(collection) {
    var result = [];
    var length = collection.length;
    var idx = -1;
    while (++idx < length) {
        result[idx] = collection[idx];
    }
    return result;
}
/**
 * returns whether list is empty or not
 */
function isEmpty(array) {
    return !array || !array.length;
}
/**
 * cluster elements by predicate function.
 *
 * @param {Array} array - array
 * @param {Function} fn - predicate function for cluster rule
 * @param {Array[]}
 */
function clusterBy(array, fn) {
    if (!array.length) {
        return [];
    }
    var aTail = tail(array);
    return aTail.reduce(function (memo, v) {
        var aLast = last(memo);
        if (fn(last(aLast), v)) {
            aLast[aLast.length] = v;
        }
        else {
            memo[memo.length] = [v];
        }
        return memo;
    }, [[head(array)]]);
}
/**
 * returns a copy of the array with all false values removed
 *
 * @param {Array} array - array
 * @param {Function} fn - predicate function for cluster rule
 */
function compact(array) {
    var aResult = [];
    for (var idx = 0, len = array.length; idx < len; idx++) {
        if (array[idx]) {
            aResult.push(array[idx]);
        }
    }
    return aResult;
}
/**
 * produces a duplicate-free version of the array
 *
 * @param {Array} array
 */
function unique(array) {
    var results = [];
    for (var idx = 0, len = array.length; idx < len; idx++) {
        if (!contains(results, array[idx])) {
            results.push(array[idx]);
        }
    }
    return results;
}
/**
 * returns next item.
 * @param {Array} array
 */
function next(array, item) {
    var idx = indexOf(array, item);
    if (idx === -1) {
        return null;
    }
    return array[idx + 1];
}
/**
 * returns prev item.
 * @param {Array} array
 */
function prev(array, item) {
    var idx = indexOf(array, item);
    if (idx === -1) {
        return null;
    }
    return array[idx - 1];
}
/**
 * @class core.list
 *
 * list utils
 *
 * @singleton
 * @alternateClassName list
 */
var lists = {
    head: head,
    last: last,
    initial: initial,
    tail: tail,
    prev: prev,
    next: next,
    find: find,
    contains: contains,
    all: all,
    sum: sum,
    from: from,
    isEmpty: isEmpty,
    clusterBy: clusterBy,
    compact: compact,
    unique: unique
};

var KEY_MAP = {
    'BACKSPACE': 8,
    'TAB': 9,
    'ENTER': 13,
    'SPACE': 32,
    'DELETE': 46,
    // Arrow
    'LEFT': 37,
    'UP': 38,
    'RIGHT': 39,
    'DOWN': 40,
    // Number: 0-9
    'NUM0': 48,
    'NUM1': 49,
    'NUM2': 50,
    'NUM3': 51,
    'NUM4': 52,
    'NUM5': 53,
    'NUM6': 54,
    'NUM7': 55,
    'NUM8': 56,
    // Alphabet: a-z
    'B': 66,
    'E': 69,
    'I': 73,
    'J': 74,
    'K': 75,
    'L': 76,
    'R': 82,
    'S': 83,
    'U': 85,
    'V': 86,
    'Y': 89,
    'Z': 90,
    'SLASH': 191,
    'LEFTBRACKET': 219,
    'BACKSLASH': 220,
    'RIGHTBRACKET': 221
};
/**
 * @class core.key
 *
 * Object for keycodes.
 *
 * @singleton
 * @alternateClassName key
 */
var key = {
    /**
     * @method isEdit
     *
     * @param {Number} keyCode
     * @return {Boolean}
     */
    isEdit: function (keyCode) {
        return lists.contains([
            KEY_MAP.BACKSPACE,
            KEY_MAP.TAB,
            KEY_MAP.ENTER,
            KEY_MAP.SPACE,
            KEY_MAP.DELETE
        ], keyCode);
    },
    /**
     * @method isMove
     *
     * @param {Number} keyCode
     * @return {Boolean}
     */
    isMove: function (keyCode) {
        return lists.contains([
            KEY_MAP.LEFT,
            KEY_MAP.UP,
            KEY_MAP.RIGHT,
            KEY_MAP.DOWN
        ], keyCode);
    },
    /**
     * @property {Object} nameFromCode
     * @property {String} nameFromCode.8 "BACKSPACE"
     */
    nameFromCode: func.invertObject(KEY_MAP),
    code: KEY_MAP
};

var NBSP_CHAR = String.fromCharCode(160);
var ZERO_WIDTH_NBSP_CHAR = '\ufeff';
/**
 * @method isEditable
 *
 * returns whether node is `note-editable` or not.
 *
 * @param {Node} node
 * @return {Boolean}
 */
function isEditable(node) {
    return node && $$1(node).hasClass('note-editable');
}
/**
 * @method isControlSizing
 *
 * returns whether node is `note-control-sizing` or not.
 *
 * @param {Node} node
 * @return {Boolean}
 */
function isControlSizing(node) {
    return node && $$1(node).hasClass('note-control-sizing');
}
/**
 * @method makePredByNodeName
 *
 * returns predicate which judge whether nodeName is same
 *
 * @param {String} nodeName
 * @return {Function}
 */
function makePredByNodeName(nodeName) {
    nodeName = nodeName.toUpperCase();
    return function (node) {
        return node && node.nodeName.toUpperCase() === nodeName;
    };
}
/**
 * @method isText
 *
 *
 *
 * @param {Node} node
 * @return {Boolean} true if node's type is text(3)
 */
function isText(node) {
    return node && node.nodeType === 3;
}
/**
 * @method isElement
 *
 *
 *
 * @param {Node} node
 * @return {Boolean} true if node's type is element(1)
 */
function isElement(node) {
    return node && node.nodeType === 1;
}
/**
 * ex) br, col, embed, hr, img, input, ...
 * @see http://www.w3.org/html/wg/drafts/html/master/syntax.html#void-elements
 */
function isVoid(node) {
    return node && /^BR|^IMG|^HR|^IFRAME|^BUTTON|^INPUT/.test(node.nodeName.toUpperCase());
}
function isPara(node) {
    if (isEditable(node)) {
        return false;
    }
    // Chrome(v31.0), FF(v25.0.1) use DIV for paragraph
    return node && /^DIV|^P|^LI|^H[1-7]/.test(node.nodeName.toUpperCase());
}
function isHeading(node) {
    return node && /^H[1-7]/.test(node.nodeName.toUpperCase());
}
var isPre = makePredByNodeName('PRE');
var isLi = makePredByNodeName('LI');
function isPurePara(node) {
    return isPara(node) && !isLi(node);
}
var isTable = makePredByNodeName('TABLE');
var isData = makePredByNodeName('DATA');
function isInline(node) {
    return !isBodyContainer(node) &&
        !isList(node) &&
        !isHr(node) &&
        !isPara(node) &&
       