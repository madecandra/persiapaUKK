program writefile1;
uses crt;

var
        file_name : string = 'Ujikom2.txt';
        file_content : text;

begin
        assign(file_content, file_name);

        rewrite(file_content);

        writeln(file_content, 'anjae beud dah luwh');

        close(file_content);

        clrscr;

        writeln('Teks telah berhasil ditulis');
        readln();
end.