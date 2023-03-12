program ujikom3;
uses crt;
var
        var_text : text;
        var_baca : string;
begin
        clrscr;
        assign(var_text, 'TeksUjikom2.txt');
        reset(var_text);
        while not eof(var_text) do
        begin
                readln(var_text,var_baca);
                writeln(var_baca);
        end;
        close(var_text);
        readkey();
end.