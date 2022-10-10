$(".toggler").click(function() {
    $("#add").toggle();
});

$(".ara").click(function() {
    $("#araa").toggle();
});
// changing colors for qaida
$(".stopic").find(".qaida").each(function() {
    var qaida = $(this).text();
    $(this).css({
        color: function() {
            if (qaida == 'کلی') {
                return 'red';
            }
            if (qaida == 'اکثری') {
                return 'orange';
            }
            if (qaida == 'جزوی') {
                return 'green';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (qaida == 'کلی') {
                return 'red';
            }
            if (qaida == 'اکثری') {
                return 'orange';
            }
            if (qaida == 'اکثری') {
                return 'green';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (qaida == 'کلی') {
                return '1px solid red';
            }
            if (qaida == 'اکثری') {
                return '1px solid orange';
            }
            if (qaida == 'جزوی') {
                return '1px solid green';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
$(".stopic").find(".taleem").each(function() {
    var taleem = $(this).text();
    $(this).css({
        color: function() {
            if (taleem == 'علمی') {
                return '#827da7';
            }
            if (taleem == 'عملی') {
                return '#70b4ac';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (taleem == 'علمی') {
                return '#827da7';
            }
            if (taleem == 'عملی') {
                return '#70b4ac';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (taleem == 'علمی') {
                return '1px solid #827da7';
            }
            if (taleem == 'عملی') {
                return '1px solid #70b4ac';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
$(".stopic").find(".taluq").each(function() {
    var taleem = $(this).text();
    $(this).css({
        color: function() {
            if (taleem == 'ظاہری') {
                return '#806000';
            }
            if (taleem == 'باطنی') {
                return '#ccaea8';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (taleem == 'ظاہری') {
                return '#806000';
            }
            if (taleem == 'باطنی') {
                return '#ccaea8';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (taleem == 'ظاہری') {
                return '1px solid #806000';
            }
            if (taleem == 'باطنی') {
                return '1px solid #ccaea8';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
$(".stopic").find(".adal").each(function() {
    var qaida = $(this).text();
    $(this).css({
        color: function() {
            if (qaida == 'قانوناً') {
                return 'red';
            }
            if (qaida == 'دیانتاً') {
                return 'orange';
            }
            if (qaida == 'احساناً') {
                return 'yellow';
            }
            if (qaida == 'مقصود') {
                return 'blue';
            }
            if (qaida == 'مقصود بالذات') {
                return 'gray';
            }
            if (qaida == 'ذرائع') {
                return 'green';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (qaida == 'قانوناً') {
                return 'red';
            }
            if (qaida == 'دیانتاً') {
                return 'orange';
            }
            if (qaida == 'احساناً') {
                return 'yellow';
            }
            if (qaida == 'مقصود') {
                return 'blue';
            }
            if (qaida == 'مقصود بالذات') {
                return 'gray';
            }
            if (qaida == 'ذرائع') {
                return 'green';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (qaida == 'قانوناً') {
                return '1px solid red';
            }
            if (qaida == 'دیانتاً') {
                return '1px solid orange';
            }
            if (qaida == 'احساناً') {
                return '1px solid yellow';
            }
            if (qaida == 'مقصود') {
                return '1px solid blue';
            }
            if (qaida == 'مقصود بالذات') {
                return '1px solid gray';
            }
            if (qaida == 'ذرائع') {
                return '1px solid green';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
// =========================================================
// changing colors for hukam
$(".stopic").find(".hukam").each(function() {
    var hukam = $(this).text();
    $(this).css({
        color: function() {
            if (hukam == 'فرض') {
                return '#0070c0';
            }
            if (hukam == 'فرض عین') {
                return '#00355c';
            }
            if (hukam == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (hukam == 'واجب') {
                return '#9bc2e6';
            }
            if (hukam == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (hukam == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (hukam == 'نفل') {
                return '#808080';
            }
            if (hukam == 'مستحب') {
                return '#c9c9c9';
            }
            if (hukam == 'مباح') {
                return '#00355c';
            }
            if (hukam == 'حرام') {
                return '#ff0000';
            }
            if (hukam == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (hukam == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (hukam == 'سنت') {
                return '#6ea549';
            }
            if (hukam == 'افضل') {
                return '#d9d6d6';
            }
            if (hukam == 'جائز') {
                return '#a78b8b';
            }
            if (hukam == 'ناجائز') {
                return '#c9a740';
            }
            if (hukam == 'بنیاد') {
                return '#b8ccdf';
            }
            if (hukam == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (hukam == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (hukam == 'فرض') {
                return '#0070c0';
            }
            if (hukam == 'فرض عین') {
                return '#00355c';
            }
            if (hukam == 'فرض عین') {
                return '#00355c';
            }
            if (hukam == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (hukam == 'واجب') {
                return '#9bc2e6';
            }
            if (hukam == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (hukam == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (hukam == 'نفل') {
                return '#808080';
            }
            if (hukam == 'مستحب') {
                return '#c9c9c9';
            }
            if (hukam == 'مباح') {
                return '#00355c';
            }
            if (hukam == 'حرام') {
                return '#ff0000';
            }
            if (hukam == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (hukam == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (hukam == 'سنت') {
                return '#6ea549';
            }
            if (hukam == 'افضل') {
                return '#d9d6d6';
            }
            if (hukam == 'جائز') {
                return '#a78b8b';
            }
            if (hukam == 'ناجائز') {
                return '#c9a740';
            }
            if (hukam == 'بنیاد') {
                return '#b8ccdf';
            }
            if (hukam == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (hukam == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (hukam == 'فرض') {
                return '1px solid #0070c0';
            }
            if (hukam == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (hukam == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (hukam == 'فرض کفایہ') {
                return '1px solid #3312ae';
            }
            if (hukam == 'واجب') {
                return '1px solid #9bc2e6';
            }
            if (hukam == 'سنت مؤکدہ') {
                return '1px solid #00355c';
            }
            if (hukam == 'سنت غیر مؤکدہ') {
                return '1px solid #a9d08e';
            }
            if (hukam == 'نفل') {
                return '1px solid #808080';
            }
            if (hukam == 'مستحب') {
                return '1px solid #c9c9c9';
            }
            if (hukam == 'مباح') {
                return '1px solid #00355c';
            }
            if (hukam == 'حرام') {
                return '1px solid #ff0000';
            }
            if (hukam == 'مکروہ تحریمی') {
                return '1px solid #f6acbc';
            }
            if (hukam == 'مکروہ تنزیہی') {
                return '1px solid #ffc000';
            }
            if (hukam == 'سنت') {
                return '1px solid #6ea549';
            }
            if (hukam == 'افضل') {
                return '1px solid #d9d6d6';
            }
            if (hukam == 'جائز') {
                return '1px solid #a78b8b';
            }
            if (hukam == 'ناجائز') {
                return '1px solid #c9a740';
            }
            if (hukam == 'بنیاد') {
                return '1px solid #b8ccdf';
            }
            if (hukam == 'دفعِ مضرت') {
                return '1px solid #cd7676';
            }
            if (hukam == 'ابہام') {
                return '#726767';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
$(".ltopic").find(".mukhtasar").each(function() {
    var wazahat = $(this).parent().parent().siblings().children().children('.hukam').text();
    $(this).css({
        color: function() {
            if (wazahat == 'فرض') {
                return '#0070c0';
            }
            if (wazahat == 'فرض عین') {
                return '#00355c';
            }
            if (wazahat == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (wazahat == 'واجب') {
                return '#9bc2e6';
            }
            if (wazahat == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (wazahat == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (wazahat == 'نفل') {
                return '#808080';
            }
            if (wazahat == 'مستحب') {
                return '#c9c9c9';
            }
            if (wazahat == 'مباح') {
                return '#00355c';
            }
            if (wazahat == 'حرام') {
                return '#ff0000';
            }
            if (wazahat == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (wazahat == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (wazahat == 'سنت') {
                return '#6ea549';
            }
            if (wazahat == 'افضل') {
                return '#d9d6d6';
            }
            if (wazahat == 'جائز') {
                return '#a78b8b';
            }
            if (wazahat == 'ناجائز') {
                return '#c9a740';
            }
            if (wazahat == 'بنیاد') {
                return '#b8ccdf';
            }
            if (wazahat == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (wazahat == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (wazahat == 'فرض') {
                return '#0070c0';
            }
            if (wazahat == 'فرض عین') {
                return '#00355c';
            }
            if (wazahat == 'فرض عین') {
                return '#00355c';
            }
            if (wazahat == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (wazahat == 'واجب') {
                return '#9bc2e6';
            }
            if (wazahat == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (wazahat == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (wazahat == 'نفل') {
                return '#808080';
            }
            if (wazahat == 'مستحب') {
                return '#c9c9c9';
            }
            if (wazahat == 'مباح') {
                return '#00355c';
            }
            if (wazahat == 'حرام') {
                return '#ff0000';
            }
            if (wazahat == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (wazahat == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (wazahat == 'سنت') {
                return '#6ea549';
            }
            if (wazahat == 'افضل') {
                return '#d9d6d6';
            }
            if (wazahat == 'جائز') {
                return '#a78b8b';
            }
            if (wazahat == 'ناجائز') {
                return '#c9a740';
            }
            if (wazahat == 'بنیاد') {
                return '#b8ccdf';
            }
            if (wazahat == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (wazahat == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (wazahat == 'فرض') {
                return '1px solid #0070c0';
            }
            if (wazahat == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (wazahat == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (wazahat == 'فرض کفایہ') {
                return '1px solid #3312ae';
            }
            if (wazahat == 'واجب') {
                return '1px solid #9bc2e6';
            }
            if (wazahat == 'سنت مؤکدہ') {
                return '1px solid #00355c';
            }
            if (wazahat == 'سنت غیر مؤکدہ') {
                return '1px solid #a9d08e';
            }
            if (wazahat == 'نفل') {
                return '1px solid #808080';
            }
            if (wazahat == 'مستحب') {
                return '1px solid #c9c9c9';
            }
            if (wazahat == 'مباح') {
                return '1px solid #00355c';
            }
            if (wazahat == 'حرام') {
                return '1px solid #ff0000';
            }
            if (wazahat == 'مکروہ تحریمی') {
                return '1px solid #f6acbc';
            }
            if (wazahat == 'مکروہ تنزیہی') {
                return '1px solid #ffc000';
            }
            if (wazahat == 'سنت') {
                return '1px solid #6ea549';
            }
            if (wazahat == 'افضل') {
                return '1px solid #d9d6d6';
            }
            if (wazahat == 'جائز') {
                return '1px solid #a78b8b';
            }
            if (wazahat == 'ناجائز') {
                return '1px solid #c9a740';
            }
            if (wazahat == 'بنیاد') {
                return '1px solid #b8ccdf';
            }
            if (wazahat == 'دفعِ مضرت') {
                return '1px solid #cd7676';
            }
            if (wazahat == 'ابہام') {
                return '1px solid #726767';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
$(".ltopic").find(".hawala").each(function() {
    var hawala = $(this).parent().parent().parent().siblings().children().children().children('.hukam').text();
    $(this).css({
        color: function() {
            if (hawala == 'فرض') {
                return '#0070c0';
            }
            if (hawala == 'فرض عین') {
                return '#00355c';
            }
            if (hawala == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (hawala == 'واجب') {
                return '#9bc2e6';
            }
            if (hawala == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (hawala == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (hawala == 'نفل') {
                return '#808080';
            }
            if (hawala == 'مستحب') {
                return '#c9c9c9';
            }
            if (hawala == 'مباح') {
                return '#00355c';
            }
            if (hawala == 'حرام') {
                return '#ff0000';
            }
            if (hawala == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (hawala == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (hawala == 'سنت') {
                return '#6ea549';
            }
            if (hawala == 'افضل') {
                return '#d9d6d6';
            }
            if (hawala == 'جائز') {
                return '#a78b8b';
            }
            if (hawala == 'ناجائز') {
                return '#c9a740';
            }
            if (hawala == 'بنیاد') {
                return '#b8ccdf';
            }
            if (hawala == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (hawala == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (hawala == 'فرض') {
                return '#0070c0';
            }
            if (hawala == 'فرض عین') {
                return '#00355c';
            }
            if (hawala == 'فرض عین') {
                return '#00355c';
            }
            if (hawala == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (hawala == 'واجب') {
                return '#9bc2e6';
            }
            if (hawala == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (hawala == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (hawala == 'نفل') {
                return '#808080';
            }
            if (hawala == 'مستحب') {
                return '#c9c9c9';
            }
            if (hawala == 'مباح') {
                return '#00355c';
            }
            if (hawala == 'حرام') {
                return '#ff0000';
            }
            if (hawala == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (hawala == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (hawala == 'سنت') {
                return '#6ea549';
            }
            if (hawala == 'افضل') {
                return '#d9d6d6';
            }
            if (hawala == 'جائز') {
                return '#a78b8b';
            }
            if (hawala == 'ناجائز') {
                return '#c9a740';
            }
            if (hawala == 'بنیاد') {
                return '#b8ccdf';
            }
            if (hawala == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (hawala == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (hawala == 'فرض') {
                return '1px solid #0070c0';
            }
            if (hawala == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (hawala == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (hawala == 'فرض کفایہ') {
                return '1px solid #3312ae';
            }
            if (hawala == 'واجب') {
                return '1px solid #9bc2e6';
            }
            if (hawala == 'سنت مؤکدہ') {
                return '1px solid #00355c';
            }
            if (hawala == 'سنت غیر مؤکدہ') {
                return '1px solid #a9d08e';
            }
            if (hawala == 'نفل') {
                return '1px solid #808080';
            }
            if (hawala == 'مستحب') {
                return '1px solid #c9c9c9';
            }
            if (hawala == 'مباح') {
                return '1px solid #00355c';
            }
            if (hawala == 'حرام') {
                return '1px solid #ff0000';
            }
            if (hawala == 'مکروہ تحریمی') {
                return '1px solid #f6acbc';
            }
            if (hawala == 'مکروہ تنزیہی') {
                return '1px solid #ffc000';
            }
            if (hawala == 'سنت') {
                return '1px solid #6ea549';
            }
            if (hawala == 'افضل') {
                return '1px solid #d9d6d6';
            }
            if (hawala == 'جائز') {
                return '1px solid #a78b8b';
            }
            if (hawala == 'ناجائز') {
                return '1px solid #c9a740';
            }
            if (hawala == 'بنیاد') {
                return '1px solid #b8ccdf';
            }
            if (hawala == 'دفعِ مضرت') {
                return '1px solid #cd7676';
            }
            if (hawala == 'ابہام') {
                return '1px solid #726767';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});
$(".ltopic").find(".muharik").each(function() {
    var hawala = $(this).parent().parent().parent().siblings().children().children().children('.hukam').text();
    $(this).css({
        color: function() {
            if (hawala == 'فرض') {
                return '#0070c0';
            }
            if (hawala == 'فرض عین') {
                return '#00355c';
            }
            if (hawala == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (hawala == 'واجب') {
                return '#9bc2e6';
            }
            if (hawala == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (hawala == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (hawala == 'نفل') {
                return '#808080';
            }
            if (hawala == 'مستحب') {
                return '#c9c9c9';
            }
            if (hawala == 'مباح') {
                return '#00355c';
            }
            if (hawala == 'حرام') {
                return '#ff0000';
            }
            if (hawala == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (hawala == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (hawala == 'سنت') {
                return '#6ea549';
            }
            if (hawala == 'افضل') {
                return '#d9d6d6';
            }
            if (hawala == 'جائز') {
                return '#a78b8b';
            }
            if (hawala == 'ناجائز') {
                return '#c9a740';
            }
            if (hawala == 'بنیاد') {
                return '#b8ccdf';
            }
            if (hawala == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (hawala == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    })
    $(this).parent().siblings('.dot').css({
        background: function() {
            if (hawala == 'فرض') {
                return '#0070c0';
            }
            if (hawala == 'فرض عین') {
                return '#00355c';
            }
            if (hawala == 'فرض عین') {
                return '#00355c';
            }
            if (hawala == 'فرض کفایہ') {
                return '#3312ae';
            }
            if (hawala == 'واجب') {
                return '#9bc2e6';
            }
            if (hawala == 'سنت مؤکدہ') {
                return '#00355c';
            }
            if (hawala == 'سنت غیر مؤکدہ') {
                return '#a9d08e';
            }
            if (hawala == 'نفل') {
                return '#808080';
            }
            if (hawala == 'مستحب') {
                return '#c9c9c9';
            }
            if (hawala == 'مباح') {
                return '#00355c';
            }
            if (hawala == 'حرام') {
                return '#ff0000';
            }
            if (hawala == 'مکروہ تحریمی') {
                return '#f6acbc';
            }
            if (hawala == 'مکروہ تنزیہی') {
                return '#ffc000';
            }
            if (hawala == 'سنت') {
                return '#6ea549';
            }
            if (hawala == 'افضل') {
                return '#d9d6d6';
            }
            if (hawala == 'جائز') {
                return '#a78b8b';
            }
            if (hawala == 'ناجائز') {
                return '#c9a740';
            }
            if (hawala == 'بنیاد') {
                return '#b8ccdf';
            }
            if (hawala == 'دفعِ مضرت') {
                return '#cd7676';
            }
            if (hawala == 'ابہام') {
                return '#726767';
            } else {
                return 'hsl(164deg 72% 23%)';
            }
        }
    });
    $(this).parent().siblings('.dot').parent().css({
        border: function() {
            if (hawala == 'فرض') {
                return '1px solid #0070c0';
            }
            if (hawala == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (hawala == 'فرض عین') {
                return '1px solid #00355c';
            }
            if (hawala == 'فرض کفایہ') {
                return '1px solid #3312ae';
            }
            if (hawala == 'واجب') {
                return '1px solid #9bc2e6';
            }
            if (hawala == 'سنت مؤکدہ') {
                return '1px solid #00355c';
            }
            if (hawala == 'سنت غیر مؤکدہ') {
                return '1px solid #a9d08e';
            }
            if (hawala == 'نفل') {
                return '1px solid #808080';
            }
            if (hawala == 'مستحب') {
                return '1px solid #c9c9c9';
            }
            if (hawala == 'مباح') {
                return '1px solid #00355c';
            }
            if (hawala == 'حرام') {
                return '1px solid #ff0000';
            }
            if (hawala == 'مکروہ تحریمی') {
                return '1px solid #f6acbc';
            }
            if (hawala == 'مکروہ تنزیہی') {
                return '1px solid #ffc000';
            }
            if (hawala == 'سنت') {
                return '1px solid #6ea549';
            }
            if (hawala == 'افضل') {
                return '1px solid #d9d6d6';
            }
            if (hawala == 'جائز') {
                return '1px solid #a78b8b';
            }
            if (hawala == 'ناجائز') {
                return '1px solid #c9a740';
            }
            if (hawala == 'بنیاد') {
                return '1px solid #b8ccdf';
            }
            if (hawala == 'دفعِ مضرت') {
                return '1px solid #cd7676';
            }
            if (hawala == 'ابہام') {
                return '1px solid #726767';
            } else {
                return '1px solid hsl(164deg 72% 23%)';
            }
        }
    });
});


$("#eclose").click(function() {
    $("#edit").hide();
});
$('#editForm').unbind('submit').bind('submit', function(e) {
    e.preventDefault();
    id = $('#treeid').text();
    $.ajax({
        type: "POST",
        url: '/api/update/' + id,
        data: $(this).serialize(),
        success: function(data) {
            if ($.isEmptyObject(data.error)) {
                printSuccessMsg(data.success);
            } else {
                printErrorMsg(data.error);
            }
        }
    });

    function printErrorMsg(msg) {
        $(".print-error-msg").find("ul").html('');
        $(".print-error-msg").css('display', 'block');
        $.each(msg, function(key, value) {
            $(".print-error-msg").find("ul").append('<li>' + value + '</li>');

        });
    }

    function printSuccessMsg(msg) {
        $(".print-success-msg").find("ul").html(msg);
        $(".print-success-msg").css('display', 'block');
    }
});

//Delete function
$('#delete').unbind('click').bind('click', function() {
    var id = $('#did').text();
    $('#dclose').hide();
    $.ajax({
        url: "api/delete/" + id,
        success: function(data) {
            printDeleteMsg(data.deletemsg);
        }
    });
    return false;
});
$('#jinahi').click(function() {
    $('#dclose').hide();
})

function printDeleteMsg(msg) {
    $(".print-delete-msg").find("ul").html(msg);
    $(".print-delete-msg").css('display', 'block');

}

//comment submission 
$('#comment').on('submit', function(e) {
    e.preventDefault();
    var userId = $('#userId').text();
    var treeId = $('#treeId').text();
    $.ajax({
        type: "POST",
        url: 'api/add-comment',
        data: $(this).serialize() + '&' + $.param({ userId: userId, treeId: treeId }),
        success: function(data) {
            if ($.isEmptyObject(data.error)) {
                printSuccessMsg(data.success);
            } else {
                printErrorMsg(data.error);
                console.log(data.error);
            }
        }
    });

    function printErrorMsg(msg) {
        $(".print-cerror-msg").find("ul").html('');
        $(".print-cerror-msg").css('display', 'block');
        $.each(msg, function(key, value) {
            $(".print-cerror-msg").find("ul").append('<li>' + value + '</li>');

        });
    }

    function printSuccessMsg(msg) {
        $(".print-csuccess-msg").find("ul").html(msg);
        $(".print-csuccess-msg").css('display', 'block');
        // $.each(msg, function(key, value) {
        //     $(".print-success-msg").find("ul").append('<li>' + value + '</li>');

        // });
    }
});
$('#acomment').click(function() {
    var treeTitle = $('#treeTitle').text();
    var treeId = $('#treeId').text();
    $.ajax({
        url: "api/comment/",
        data: {
            treeTitle: treeTitle,
            treeId: treeId
        },
        success: function(data) {
            $("#comment2").html(data);
            // printEditMsg(data.editmsg);

        }
    });
})
$('#coclose').click(function() {
    $('#araa').hide();
})