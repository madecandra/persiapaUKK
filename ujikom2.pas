program ujikom2;
uses crt;
var
        var_text : text;
begin
        clrscr;
        assign(var_text,'TeksUjikom2.txt');
        rewrite(var_text);
        writeln(var_text,'Saya sedang mengikuti Uji Kompetensi Perangkat Lunak');
        close(var_text);
        readkey();
end.v