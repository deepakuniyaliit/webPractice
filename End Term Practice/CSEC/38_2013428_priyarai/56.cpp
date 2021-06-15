#include<bits/stdc++.h>
using namespace std;
int score(int q[],int ans[],int n1,int n2)
{
    int marks=0;
    for(int i=0;i<n1;i++)
    {
        if(q[i]==ans[i])
        {
            marks++;
        }
    }
    return (marks);
}
int main()
{
    int n;
    cin>>n;
    int m;
    cin>>m;
    int arr[n];
    for(int i=0;i<n;i++)
    {
        cin>>arr[i];
    }
    int final [n];
    for(int i=0;i<n;i++)
    {
        final[i]=arr[i];
    }
    int resp[m][n];
    for(int i=0;i<m;i++)
    {
        for(int j=0;j<n;j++)
        {
            cin>>resp[i][j];
        }
    }
    int temp[n];
    for(int i=0;i<m;i++)
    {
        cout<<("instant marks")<<endl;
        for(int j=0;j<n;j++)
        {
            temp[j]=resp[i][j];
        }
        cout<<score(temp,arr,n,n)<<endl;
        for(int j=0;j<n;j++)
        {
            final[j]=(temp[j]+final[j])/2;
        }
    }
    int Fmarks[m];
    for(int i=0;i<m;i++)
    {
        for(int j=0;j<n;j++)
        {
            temp[j]=resp[i][j];
        }
        Fmarks[i]=score(temp,final,n,n);
    }
    int topper=0;
    int id;
    for(int i=0;i<m;i++)
    {
        if(Fmarks[i]>topper)
        {
            topper=Fmarks[i];
            id=i;
        }
    }
    cout<<"topper is"<<(id+1)<<"th peron"<<endl;
    cout<<"his score is"<<topper;
}
