
saliencyWinners = [
    01, 252, 551;
    02, 268, 460;
    03, 793, 314;
    04, 638, 858;
    05, 181, 916;
    06, 173, 120;
    07, 307, 249;
    08, 236, 462;
    09, 285, 199;
    10, 116, 549;
    11, 308, 79;
    12, 224, 228;
    13, 735, 327;
    14, 217, 240;
    15, 855, 853;
    16, 772, 161;
    17, 98, 710;
    18, 262, 173;
    19, 330, 704;
    20, 825, 230;
    21, 698, 697;
    22, 891, 454;
    23, 428, 124;
    24, 341, 705;
    25, 409, 141;
    26, 774, 112;
    27, 770, 895;
    28, 844, 216;
    29, 489, 254;
    30, 306, 76;
    ];

n = 1;

while n <= 30;
fileNumber = int2str(saliencyWinners(n, 1));    
filename = strcat(fileNumber, '.jpeg');  
image = imread(filename);

[y,x,z] = size(image);
winnerx = saliencyWinners(n, 2);
winnery = saliencyWinners(n, 3);

if(winnerx-300)<0
    winnerx=0;
elseif(winnerx+300)> x
     winnerx = x-600;   
else winnerx = winnerx-300;
end

if(winnery-300) < 0
    winnery = 0;
elseif(winnery+300) > y
    winnery = y-600;
else winnery = winnery-300;
end    

rect = [winnerx, winnery, 600, 600];
fprintf('winnerx = %f\n', winnerx);
fprintf('winnery = %f\n', winnery);
output = imcrop(image, rect);
output =imresize(output, 275/600);
outputName = strcat('salient_', fileNumber, '.jpeg');
imwrite(output, outputName);
n = n+1;
end;