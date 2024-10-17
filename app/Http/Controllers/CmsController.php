<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Instagram;
use App\Models\ServiceLanding;
use App\Models\Testimonials;
use App\Models\FeedBackVideo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CmsController extends Controller
{
    public function blogs()
    {
        $blogs = Blog::paginate(12);
        return view('admin.cms.blogs.index', compact('blogs'));
    }

    public function blogs_create()
    {
        return view('admin.cms.blogs.create');
    }
    public function blogs_store(Request $request)
    {
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug= Str::slug($request->title);
        $blog->text = $request->text;
        $blog->status = $request->status;
        $blog->meta_tags = $request->meta_tags;
        $blog->meta_description = $request->meta_description;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagesapi/');
            $image->move($destinationPath, $name);
            $blog['image'] = $name;
        }
        $blog->save();
        return redirect()->route('blogs')->with('success','Data inserted Successfully');
    }
    public function blogs_edit($id)
    {
        $blogs = Blog::find($id);
        return view('admin.cms.blogs.edit', compact('blogs'));
    }
    public function blogs_update(Request $request, $id)
    {
        // dd($request->all());
        $blog = Blog::find($id);
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->meta_tags = $request->meta_tags;
        $blog->meta_description = $request->meta_description;
        $blog->text = $request->text;
        $blog->status = $request->status;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagesapi/');
            $image->move($destinationPath, $name);
            $blog->image = $name;
        }
        $blog->save();
        return redirect()->route('blogs')->with('success','Data Updated Successfully');
    }
    public function blogs_delete($id)
    {
        if(Blog::find($id)){
            Blog::find($id)->delete();
            return redirect()->route('blogs')->with('success','Data Deleted Successfully');
        }else{
            return redirect()->route('blogs')->with('error','Check id exit or not');
        }
    }

    // testimonial
    public function testimonial(Request $request)
    {
        if ($request->name) {
            $testimonial = Testimonials::where('name', 'LIKE', "%{$request->name}%")->paginate(12);
        } else {
            $testimonial = Testimonials::paginate(12);
        }
        return view('admin.cms.testimonial.index', compact('testimonial'));
    }

    public function testimonial_create()
    {
        return view('admin.cms.testimonial.create');
    }
    public function testimonial_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'location' => 'required',
            'status' => 'required',
            'profile_picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'testimonial_desc'=>'required',
        ]);

        $testimonial = new Testimonials();
        $testimonial->name = $request->name;
        $testimonial->designation= $request->designation;
        $testimonial->location = $request->location;
        $testimonial->meta_tags = $request->meta_tags;
        $testimonial->meta_description =$request->meta_description;
        $testimonial->testimonial_desc = $request->testimonial_desc;
        $testimonial->status = $request->status;
        $testimonial->created_by = Auth::user()->id;
        $testimonial->updated_by = Auth::user()->id;
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagesapi/');
            $image->move($destinationPath, $name);
            $testimonial['profile_picture'] = $name;
        }
        $testimonial->save();
        return redirect()->route('testimonial')->with('success','Data inserted Successfully');
    }
    public function testimonial_edit($id)
    {
        $testimonial = Testimonials::find($id);
        return view('admin.cms.testimonial.edit', compact('testimonial'));
    }
    public function testimonial_update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'designation' => 'required',
            'location' => 'required',
            'status' => 'required',
            'profile_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'testimonial_desc'=>'required',
        ]);

        $testimonial = Testimonials::find($id);
        $testimonial->name = $request->name;
        $testimonial->designation= $request->designation;
        $testimonial->location = $request->location;
        $testimonial->testimonial_desc = $request->testimonial_desc;
        $testimonial->meta_tags = $request->meta_tags;
        $testimonial->meta_description =$request->meta_description;
        $testimonial->updated_by = Auth::user()->id;
        $testimonial->status = $request->status;
        if ($request->hasFile('profile_picture')) {
            $image = $request->file('profile_picture');
            $name = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/imagesapi/');
            $image->move($destinationPath, $name);
            $testimonial['profile_picture'] = $name;
        }
        $testimonial->save();
        return redirect()->route('testimonial')->with('success','Data Updated Successfully');
    }
    public function testimonial_delete($id)
    {
        if(Testimonials::find($id)){
            Testimonials::find($id)->delete();
            return redirect()->route('testimonial')->with('success','Data Deleted Successfully');
        }else{
            return redirect()->route('testimonial')->with('error','Check id exit or not');
        }
    }




    public function service()
    {
        $services = ServiceLanding::paginate(12);
        return view('admin.cms.service.index', compact('services'));

    }

    public function service_create()
    {
        return view('admin.cms.service.create');
    }

    public function service_store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'content' => 'required',
            'status' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service = new  ServiceLanding;
        $service->name = $request->name;
        $service->status = $request->status;
        $service->content = $request->content;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagesapi/');
            $image->move($destinationPath, $name);
            $service['image'] = $name;
        }
        $service->save();
        return redirect()->route('service.index')->with('success','Data Created Successfully');
    }

    public function service_edit($id)
    {
        $service = ServiceLanding::find($id);
        return view('admin.cms.service.edit', compact('service'));
    }

    public function service_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'status' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $service = ServiceLanding::find($id);
        $service->name = $request->name;
        $service->status = $request->status;
        $service->content = $request->content;
        if ($request->hasFile('image')) {
            if ($service->image && file_exists(public_path('imagesapi/' . $service->image))) {
                unlink(public_path('imagesapi/' . $service->image));
            }
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/imagesapi/');
            $image->move($destinationPath, $name);
            $service->image = $name;
        }
        $service->save();
        return redirect()->route('service.index')->with('success','Data Updated Successfully');
    }

    public function service_delete($id)
    {
        if (ServiceLanding::find($id)) {
            $service = ServiceLanding::find($id);
            if ($service->image && file_exists(public_path('imagesapi/' . $service->image))) {
                unlink(public_path('imagesapi/' . $service->image));
            }
            $service->delete();
            return redirect()->route('service.index')->with('success','Data Deleted Successfully');
        } else {
            return redirect()->route('service.index')->with('error','Data not found');
        }
    }

    public function instagram()
    {
        $instagrams = Instagram::paginate(12);
        return view('admin.cms.instagram.index', compact('instagrams'));
    }

    public function instagram_create()
    {
        return view('admin.cms.instagram.create');
    }

    public function instagram_edit($id)
    {
        $instagram = Instagram::find($id);
        return view('admin.cms.instagram.edit', compact('instagram'));
    }

    public function instagram_delete($id)
    {
        if (Instagram::find($id)) {
            Instagram::find($id)->delete();
            return redirect()->route('instagram.index')->with('success','Data Deleted Successfully');
        }
    }

    public function instagram_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'url' => 'required',
            'status' => 'required',
        ]);

        $instagram = Instagram::find($id);
        $instagram->url = $request->url;
        $instagram->status = $request->status;
        $instagram->save();
        return redirect()->route('instagram.index')->with('success','Data Updated Successfully');
    }

    public function instagram_store(Request $request)
    {
        $validatedData = $request->validate([
            'url' => 'required',
            'status' => 'required',
        ]);

        $instagram = new  Instagram;
        $instagram->url = $request->url;
        $instagram->status = $request->status;
        $instagram->save();
        return redirect()->route('instagram.index')->with('success','Data Created Successfully');
    }



    public function feedbackvideo($id = null)
    {
        if ($id) {
            $feedbackvideos = FeedbackVideo::where('id', $id)->paginate(10);
        } else {
            $feedbackvideos = FeedbackVideo::paginate(10);
        }
        return view('admin.cms.feedbackvideo.index', compact('feedbackvideos'));
    }

    public function feedbackvideo_create()
    {
        return view('admin.cms.feedbackvideo.create');
    }

    public function feedbackvideo_edit($id)
    {
        $feedbackvideo = FeedbackVideo::find($id);
        return view('admin.cms.feedbackvideo.edit', compact('feedbackvideo'));
    }

    public function feedbackvideo_delete($id)
    {
        if(FeedbackVideo::find($id)){
            $feedbackvideo = FeedbackVideo::find($id);
            if (file_exists(public_path('/video/'.$feedbackvideo->video_url))) {
                unlink(public_path('/video/'.$feedbackvideo->video_url));
            }
            $feedbackvideo->delete();
            return redirect()->route('feedbackvideo')->with('success','Data Deleted Successfully');
        }else{
            return redirect()->route('feedbackvideo')->with('error','Check id exit or not');
        }
    }

    public function feedbackvideo_update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'category' => 'required',
            'meta_tag' => 'required',
            'video' => 'mimes:mp4,mov,ogg,qt|max:20000',
            'meta_description' => 'required',
        ]);

        $feedbackvideo = FeedbackVideo::find($id);
        if ($request->hasFile('video')) {
            $video = $request->file('video');
            $videoName = time().'_'.$video->getClientOriginalName();
            $destinationPath = public_path('/video/');
            $video->move($destinationPath, $videoName);
            if (file_exists(public_path('/video/'.$feedbackvideo->video_url))) {
                unlink(public_path('/video/'.$feedbackvideo->video_url));
            }
            $feedbackvideo->video_url = $videoName;
        }
        $feedbackvideo->category = $request->category;
        $feedbackvideo->meta_tag = $request->meta_tag;
        $feedbackvideo->meta_description = $request->meta_description;
        $feedbackvideo->status = $request->status;
        $feedbackvideo->save();
        return redirect()->route('feedbackvideo')->with('success','Data Updated Successfully');
    }

    public function feedbackvideo_store(Request $request)
    {

        $validatedData = $request->validate([
            'category' => 'required',
            'video' => 'required|mimes:mp4,mov,ogg,qt|max:20000',
            'meta_tag' => 'required',
            'meta_description' => 'required',
        ]);

        $video = $request->file('video');
        if($video){
            $videoName = time().'_'.$video->getClientOriginalName();
            $destinationPath = public_path('/video/');
            $video->move($destinationPath, $videoName);
        }

        FeedbackVideo::create([
            'category' => $request->category,
            'video_url' => $videoName,
            'meta_tag' => $request->meta_tag,
            'meta_description' => $request->meta_description,
            'status'=>$request->status,
        ]);
        return redirect()->route('feedbackvideo')->with('success','Data Created Successfully');
    }





}
