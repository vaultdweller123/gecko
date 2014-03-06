[Git Useful Commands] 
ref: http://git-scm.com/doc
(new!)a more user friendly guide: http://www-cs-students.stanford.edu/~blynn/gitmagic/ch02.html

-- Start-up ---------------------------------------------------

1.) Set-up identity
 git config --global user.name "Janet Napoles"
 git config --global user.email janetnapoles@porkbarrel.com
	
2.) Copy or create new project
 commands:
 a.)clone - Copy and existing project to your selected directory
  git clone https://github.com/username/projectname.git
 b.)init - Initialize git in your project
  cd /path/to/your/project/folder
  git init
  
  

-- Basic routine(add/commit/push/pull) ----------------------------	
	
1.) Add file to the staging area
 a.)Add a single file
  git add filename
 b.)add multiple file(separated by spaces)
	git add file1 file2 file3
 c.)Add all files
  git add .
 d.)Add all files, will also let you tracked the removed files
  git add --all 
  
2.) Commit 
 a.) git commit -m "your message"
 - Add staged file to your local repository, and put a comment	
 b.) git commit -a -m "your message"
 - Automatically add file commit
 c.) git commit --amend 
  - appends newly added file in this type of commit
 
3.) push
 - (upload) push your local repository files to remote repository
 git push remote_repository_name your_branch

4.) pull
 - (download)pull files from a remote repository
 git pull remote_repository_name your_branch
 
 


-- Misc ------------------------------------------------------------

1.) Check repository status
 git status

2.) Check file difference
 a.)git diff
 - Compare your current file to the stage file
 b.)git diff --cached
 - See the changes on the staging area so far

3.) Add remote repository address
 a.)add 
  git remote add remote_repository_name https://github.com/username/projectname.git
 b.)rename
  git remote rename old_repository_name new_repository_name
 c.)remove
  git remote remove remote_repository_name
 d.)display remote list
  git remote 
   - list all remotes
  git remote -v
  - list all remote name and url
 e.) check remote repository info
	git remote show remote_name
 
4.) View commit history
 ref: http://git-scm.com/book/en/Git-Basics-Viewing-the-Commit-History
 git log
 a.) no parameter
  - display all of commits
 b.) -p -2
  - display difference in each commit, limits last 2 entries
 c.) --pretty=oneline
  - display only the hash number the the commit message
 d.) --pretty=format:"%h -  %an, %ar : %s"
  - formats commits into <hash> - <authorname>, <date> : <subject> the format is highly customizable, see reference for the output format
 e.) --graph
  - display an ASCII graph 
 f.) --author=author_name
  - display commits for a specific author
  
5.) Undo 
 a.) git reset HEAD filename
  - unstage tracked file
 b.) git checkout -- filename
  - unmodifiying the modified file or undo changes of your file back to the last commited state

 
6.) Tagging/Versioning
 a.) list all tags
	git tag 
 b.) list tags according to search filter
  command: git tag -l 'v1.4.2.*'
  output: v1.4.2.1
		  v1.4.2.2
		  v1.4.2.3
		  v1.4.2.4
 c.) Creating tags: 
	a.) annonated tags
	 git tag -a v1.4 -m 'my version 1.4'
	  - create a tag v1.4 and a description
	  -a --> add tag name
	  -m --> message
 	b.) lightweight tags
	 git tag v1.2
	 - creates a tag v1.2
 d.) create a tag of past commits via hash
    git tag -a v1.2 -m 'version 1.2' 9fceb02 
 3.) sharing tags
	git push origin [tag_name]
	- push a tag to a remote server
	git push origin --tags
	- push all tags to a remote server
	
7.) Branching
 a.) git branch
  - display all branches
 b.) git branch -v
  - display all branches and their latest commit
 c.) git branch branch_name
  - create a new branch
 d.) git checkout branch_name
  - switch to the specified branch
 e.) git checkout -b branch_name
 - creates a new branch and automatically switch into it
 f.) git branch -d branch_name
 - deletes the specified branch
 g.) git merge branch_name
 - merge your current branch to the specified branch 
 h.) git branch --merge
 - displays already merged braches
 i.) git branch --no-merge
 - displays branches that has not been merged
 ref: http://git-scm.com/book/en/Git-Branching-Basic-Branching-and-Merging
 
 
 8.) rebase(an alternative to merge,much cleaner commit history)
 git rebase branch_to_rebase
 warning: Do not rebase commits that you have pushed to a public repository.
 ref: http://git-scm.com/book/en/Git-Branching-Rebasing
 

 9.) Reset(Go back to an old commit or version)
  # this will detach your HEAD, i.e. leave you with no branch checked out
  a.) Reset using git checkout
        git checkout 8charactercommithash
        git checkout -b new_branch
  # This will destroy any local modifications
  # Don't do it if you have uncommitted work you want to keep
  b.) Reset using git reset
        git reset --hard 8charactercommithash
  ref: http://stackoverflow.com/questions/4114095/revert-to-previous-git-commit
	   http://stackoverflow.com/questions/373812/rollback-file-to-much-earlier-version
	   
	   
 difficult advance topics:
 remote branches
 http://git-scm.com/book/en/Git-Branching-Remote-Branches
  
	

	
