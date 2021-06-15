#include<stdio.h>
void main()
{
    char ch;
    printf("Enter the character\n");
    scanf("%c",&ch);
    if(ch=='A'||ch=='E'||ch=='I'||ch=='O'||ch=='U'||ch=='a'||ch=='e'||ch=='i'||ch=='o'||ch=='u')
        printf("Entered character is the vowel\n");
    else
        printf("Entered character is consonent\n");
}
