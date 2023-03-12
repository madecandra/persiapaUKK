program nguntul;
uses crt;

var
        arr : array[0..9] of integer;
        n : integer = 9;
        i, j : integer;
        isSorted : boolean = false;

procedure readData();
begin
        for i := 0 to n do
        begin
                write('i know what your thinking ', i + 1, ': ');
                readln(arr[i]);
        end;
end;

procedure showData();
begin
        for i := 0 to n do
        begin
                writeln(arr[i]);
        end;
end;

function sortData(): boolean;
var
        sorted : boolean = false;
        temp : integer;
begin
        for i := 0 to n do
        begin
                for j := 0 to n do
                begin
                        if arr[i] < arr[j] then
                        begin
                                temp := arr[i];
                                arr[i] := arr[j];
                                arr[j] := temp;
                        end;
                end
        end;
        sorted := true;
        sortData := sorted;
end;

begin
        write('Masukan input array > ');
        readData();
        writeln();

        writeln('Array terinput');
        showData();


        isSorted := sortData();

        if isSorted then
        begin
                writeln('Array sorted');
                showData();
        end;



        readln();
end.
