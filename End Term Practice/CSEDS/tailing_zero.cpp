// { Driver Code Starts
#include<bits/stdc++.h> 
using namespace std; 

 // } Driver Code Ends
//User function Template for C++
class Solution
{
public:
    int trailingZeroes(int N)
    {
        // Write Your Code here
        long long int sum=1,c=0;
        if(N==0)
        {
            return 0;
        }
        else if(N==1)
        {
            return 0;
        }
        else
        {
            while(N>=1)
            {
                sum=sum*N;
                N--;
            }
        }
        while(sum%10==0)
        {
            c++;
            sum=sum/10;
        }
        return c;
    }
};

// { Driver Code Starts.
int main()
{
    int t;
    cin >> t;
    while (t--)
    {
        int N;
        cin >> N;
        Solution ob;
        int ans  = ob.trailingZeroes(N);
        cout<<ans<<endl;
    }
    return 0;
}  // } Driver Code Ends