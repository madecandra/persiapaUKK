program ujikom1;
uses crt;
var
        T : array[1..10] of integer;
        i,j : integer;
const
        n : integer = 10;
procedure bacaArray;
begin
        for i:= 1 to n do
        begin
                write('masukan bilangan ke- ', i,' = ');
                read(T[i]);
        end;
end;
procedure tampilArray;
begin
        write('isi array = ');
        for i:= 1 to n do
        begin
                write(' ',T[i],' ');
        end;
end;
function urutArray :boolean;
var
        temp : integer;
begin
        urutArray := true;
        for i:= 1 to n do
        for j:= 1 to n-i do
        begin
                if T[j] > T[j+1] then
                begin
                        temp := T[j];
                        T[j] := T[j+1];
                        T[j+1] := temp;
                        urutArray := false;
                end;
        end;
end;
begin;
clrscr;
bacaArray();
writeln();
tampilArray();
writeln();
if urutArray() = true then
        writeln('array sudah terurut')
else
begin
        writeln('pengurutan array dilakukan');
        tampilArray();
end;
readkey;
end.