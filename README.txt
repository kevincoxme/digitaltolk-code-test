My thoughts about the code
    The structure of the code is amazing, it uses the repository design pattern for better readability and maintainability which allows the developers to maintain the codebase in a single file and
    we don't need to apply the small changes to every single file in the future. It also allows you have access for to both your model and logic.
    A wise choice to have BaseRepository class where we can extends with different repositories since eloquent shared all the common methods like first(), where(), etc..

What makes a terrible code    
    1. For me, I noticed most of the functions/method doesn't have proper comments to know what will be the exact params needed and the return types,
    2. For the DB performance, some of the method is querying to all the contents of the table but it is only getting 1 result only like $job->users()->first()
    3. Having a helper function inside of your logic class, it could be better to separate them so that you can access throughout your application
    
    I would have done by:
        1. I put necessary comments for all methods/functions, for all comments that placed on the same line of your code/logic, I moved them above
        2. I would create a new relationship instance inside of Job model for user then changed all $job->users()->first() to $job->user
        3. I created a DateHelper and placed the convertToHoursMins() method inside, with we can use throughout the system and also create a unit test separately
