program bacateks;
uses crt, sysutils;

const
        file_name : string = 'Ujikom2.txt';
var
        file_content : text;
        file_data : string;

begin
	if fileExists(file_name) then
	begin
		{ mengubah file_content menjadi variable tipe file }
		assign(file_content, file_name);

		{ open file/stream untuk file_content }
		reset(file_content);

		writeln('Isi file dari: ', file_name);
		while not eof(file_content) do
		begin
				readln(file_content, file_data);
				writeln(file_data);
		end;

		{ close file/stream untuk file_content }
		close(file_content)
	end
	else
	begin
		writeln('file tidak ada');
	end;

        readln();
end.
