#include<stdio.h>
#include<conio.h>
void main()
{
int arr[10],j,top,max,i,temp;
printf("enter max");
scanf("%d",&max);
top=-1;
printf("enter 1 for push,2 for pop,3for display");
scanf("%d",&i);
while(i!=0)
{
switch(i)
{

case 1:
if(top!=(max-1))
{
printf("enter value to push");
scanf("%d",&temp);
arr[++top]=temp;
}
else
printf("not possible to push as already at maximum");
break;
case 2:
if(top !=-1)
{
printf("popped %d",arr[top--]);
}
else
printf("already at bottom of stack"); break;
case 3:
if(top!=-1)
{
for(j=top;j>=0;j--)
printf("%d,",arr[j]);
}
else
printf("already at bottom of stack"); break;
}
printf("\nenter 1 for push,2 for pop,3for display and 0 to end");
scanf("%d",&i);
}

}
