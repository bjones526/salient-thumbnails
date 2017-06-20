
files = dir('*.jpeg');
for i = 1:numel(files)
    filename = files(i).name;
    image=imread(filename);
    newFilename = strcat('full_', filename);
    [x,y] = size(image);
        if (y/3)>x
            output = imresize(image, 300/(y/3));
            imwrite(output, newFilename);
        else 
            output = imresize(image, 300/x);
            imwrite(output, newFilename); 
        end
end        