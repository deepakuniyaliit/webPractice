#include<stdio.h>
#include<math.h>
int main()
{
    int j,num[5],total=0;
    printf("Enter first number");
    scanf("%d",&num[0]);
    printf("Enter second number");
    scanf("%d",&num[1]);
    printf("Enter third number");
    scanf("%d",&num[2]);
    printf("Enter fourth number");
    scanf("%d",&num[3]);
    printf("Enter fifth number");
    scanf("%d",&num[4]);
    for(j=0;j<5;j++)
    {
        if(num[j]%2!=0)
        {
            total=total+num[j];
        }
        printf("Sum of all odd numbers %d", total);
        printf("/n");
    }
}